<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;
use App\KasusSubyek;
use App\KasusObyek;
use App\KasusJaksa;
use App\Surat;
use App\KategoriSubyek;

class Rp3MumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = array();
        $kasus = Kasus::select(['*'])
            ->where('status_rp2', Kasus::STATUS_DITERUSKAN)
            ->where('status_rp3mum', '<>', 0)
            ->orderBy('status_rp3mum')
            ->get();

        foreach ($kasus as $case) {
            $subyeks = array();
            $obyeks = array();

            $kasus_id = $case["id"];
            $kasus_subyek = KasusSubyek::select(['subyek_id','subyek.*','kategori_subyeks.name as kategori_subyek'])
                ->join('subyek','subyek.id','=','kasus_subyek.subyek_id')
                ->join('kategori_subyeks','subyek.kategori_subyek_id','=','kategori_subyeks.id')
                ->where('kasus_id',$kasus_id)
                ->get();
            foreach ($kasus_subyek as $subyek) {
                array_push($subyeks, $subyek);
            }
            
            $kasus_obyek = KasusObyek::select(['obyek_id','obyek.*'])
                ->join('obyek','obyek.id','=','kasus_obyek.obyek_id')
                ->where('kasus_obyek.kasus_id',$kasus_id)
                ->get();
            foreach ($kasus_obyek as $obyek) {
                array_push($obyeks, $obyek);
            }

            $case["subyeks"] = $subyeks;
            $case["obyeks"] = $obyeks;
            array_push($cases, $case);
        }
        
        return view('rp3mum.rp3mum_list', ['cases' => $cases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $case = Kasus::select(['kasus.*','subyek.id as subyek_id','subyek.nama_terlapor','subyek.lembaga','obyek.id as obyek_id','obyek.obyek_pidana','obyek.nilai_kontrak'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->where('kasus.id',$id)
            ->first();

        $kasus_jaksa = KasusJaksa::select(['kasus_jaksas.*','nama_jaksa'])
            ->join('jaksas','kasus_jaksas.jaksa_id','=','jaksas.id')
            ->where('kasus_id',$id)
            ->orderBy('nama_jaksa')
            ->pluck('nama_jaksa', 'id');

        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        return view('rp3mum.rp3mum_create', ['case' => $case, 'kasus_jaksa' => $kasus_jaksa, 'kategori_subyek' => $kategori_subyek]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_kasus'   => 'required',
            'lembaga'       => 'required',
            'nilai_kontrak' => 'required',
            'obyek_pidana'  => 'required'
        ]);

        $kasus_id = $request->id;
        $status_rp2 = $request->status_rp2;
        if ($status_rp2 == Kasus::STATUS_DIALIHKAN OR $status_rp2 == Kasus::STATUS_DIHENTIKAN) {
            // Update status menjadi arsip
            $case = Kasus::find($kasus_id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status_rp2'));
            }
        } else {
            $case = Kasus::find($kasus_id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status_rp2') + ['status_rp3mum' => Kasus::STATUS_BARU]);

                $surat = Surat::create($request->only('no_surat_perkara','tanggal_surat_perkara') + ['kasus_id' => $case->id, 'tipe_surat' => 'RP3MUM']);

                $jaksas = $request->jaksa_id;
                if ($jaksas && !empty($jaksas)) {
                    foreach ($jaksas as $jaksa) {
                        $jaksa_id = intval($jaksa);
                        $findJaksa = Jaksa::find($jaksa_id);
                        $case->jaksas()->attach($findJaksa);
                    }
                }
            }
        }

        // Update subyek
        $subyek = Subyek::find($request->subyek_id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor','lembaga','jabatan_resmi','jabatan_lain','kategori_subyek_id'));
        }

        // Update obyek
        $obyek = Obyek::find($request->obyek_id);
        if ($obyek) {
            $obyek->update($request->only('obyek_pidana','nilai_kontrak','kerugian_negara','pemulihan_aset'));
        }

        return redirect()->route('rp2.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $case = Kasus::select(['kasus.*','subyek.id as subyek_id','subyek.nama_terlapor','subyek.lembaga','jabatan_resmi','jabatan_lain','kategori_subyek_id','obyek.id as obyek_id','obyek.obyek_pidana','obyek.nilai_kontrak','kerugian_negara','pemulihan_aset','surats.id as surat_id','surats.tanggal_surat_perkara','surats.no_surat_perkara'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->join('surats','surats.kasus_id','=','kasus.id')
            ->where('kasus.id',$id)
            ->where('surats.tipe_surat','=','RP3MUM')
            ->first();


        $kasus_jaksa = KasusJaksa::select(['kasus_jaksas.*','nama_jaksa'])
            ->join('jaksas','kasus_jaksas.jaksa_id','=','jaksas.id')
            ->where('kasus_id',$id)
            ->orderBy('nama_jaksa')
            ->pluck('nama_jaksa', 'id');

        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        return view('rp3mum.rp3mum_edit', ['case' => $case, 'kasus_jaksa' => $kasus_jaksa, 'kategori_subyek' => $kategori_subyek, 'status_rp3mum' => $case->status_rp3mum]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_kasus'   => 'required',
            'lembaga'       => 'required',
            'nilai_kontrak' => 'required',
            'obyek_pidana'  => 'required'
        ]);

        $case = Kasus::find($id);
        if ($case) {
            $case->update($request->only('judul_kasus','kasus_posisi','disposisi'));
        }
        
        $obyek = Obyek::find($request->obyek_id);
        if ($obyek) {
            $obyek->update($request->only('obyek_pidana','nilai_kontrak','kerugian_negara','pemulihan_aset'));
        }
        
        $subyek = Subyek::find($request->subyek_id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor','lembaga','jabatan_resmi','jabatan_lain','kategori_subyek_id'));
        }

        $surat = Surat::find($request->surat_id);
        if ($surat) {
            $surat->update($request->only('tanggal_surat_perkara','no_surat_perkara'));
        }
        
        return redirect()->route('rp3mum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
