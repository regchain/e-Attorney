<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;
use App\KasusSubyek;
use App\KasusObyek;
use App\Jaksa;
use App\KategoriSubyek;
use App\Pasal;
use App\Spt;
use App\Surat;

class Rp3SusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = array();
        $kasus = Kasus::select(['kasus.*','surats.id as surat_id','no_surat_perkara','tanggal_surat_perkara','spt.id as spt_id'])
            ->join('surats','kasus.id','=','surats.kasus_id')
            ->join('spt','surats.id','=','spt.surat_id')
            ->where('status_rp3mum', Kasus::STATUS_DITERUSKAN)
            ->where('status_rp3sus', Kasus::STATUS_BARU)
            ->where('surats.tipe_surat', 'RP3SUS')
            ->orderBy('status_rp3sus')
            ->get();

        foreach ($kasus as $case) {
            $subyeks = array();
            $obyeks = array();
            $jaksas = array();
            $barang_sitaan = array();

            $kasus_id = $case["id"];
            $surat_id = $case["surat_id"];
            $spt_id = $case["spt_id"];
            $kasus_subyek = Spt::select(['subyek_id','subyek.*','kategori_subyeks.name as kategori_subyek'])
                ->join('spt_subyek','spt_subyek.spt_id','=','spt.id')
                ->join('subyek','subyek.id','=','spt_subyek.subyek_id')
                ->join('kategori_subyeks','subyek.kategori_subyek_id','=','kategori_subyeks.id')
                ->where('spt.surat_id', $surat_id)
                ->where('subyek.status',2)
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

            $kasus_jaksa = Surat::select(['nama_jaksa'])
                ->join('surat_jaksa','surats.id','=','surat_jaksa.surat_id')
                ->join('jaksas','surat_jaksa.jaksa_id','=','jaksas.id')
                ->join('spt','spt.surat_id','=','surats.id')
                ->where('surats.kasus_id',$kasus_id)
                ->where('tipe_surat','=','RP3SUS')
                ->where('surats.id','=',$surat_id)
                ->where('spt.id','=',$spt_id)
                ->orderBy('nama_jaksa')
                ->get();
            
            foreach ($kasus_jaksa as $jaksa) {
                array_push($jaksas, $jaksa);
            }

            $barang_bukti = Obyek::select(['barang_sitaan'])
                ->join('barang_bukti','obyek.id','=','barang_bukti.obyek_id')
                ->join('kasus_obyek','obyek.id','=','kasus_obyek.obyek_id')
                ->where('kasus_obyek.kasus_id',$kasus_id)
                ->orderBy('barang_bukti.id')
                ->get();
            
            foreach ($barang_bukti as $bukti) {
                array_push($barang_sitaan, $bukti);
            }

            $case["subyeks"] = $subyeks;
            $case["obyeks"] = $obyeks;
            $case["jaksas"] = $jaksas;
            $case["barang_sitaan"] = $barang_sitaan;
            array_push($cases, $case);
        }
        //echo json_encode($cases); die;

        return view('rp3sus.rp3sus_list', ['cases' => $cases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $spt_id)
    {
        $case = Kasus::select(['kasus.*','obyek.id as obyek_id','obyek_pidana','nilai_kontrak','kerugian_negara','pemulihan_aset'])
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->where('kasus.id',$id)
            ->first();

        $spt_subyek = Spt::select(['spt_id','subyek_id','no_spt','nama_terlapor','lembaga','jabatan_resmi','jabatan_lain'])
            ->join('spt_subyek','spt.id','=','spt_subyek.spt_id')
            ->join('subyek','spt_subyek.subyek_id','=','subyek.id')
            ->where('spt.kasus_id', $id)
            ->where('spt.id', $spt_id)
            ->get();
        
        $jaksas = Jaksa::select(['*'])
            ->orderBy('nama_jaksa')
            ->pluck('nama_jaksa', 'id');

        $pasals = Pasal::selectRaw('id, CONCAT_WS("-", "Pasal", pasal, ayat, huruf) AS pasal_name')
            ->orderBy('id')
            ->pluck('pasal_name', 'id');

        return view('rp3sus.rp3sus_create', ['case' => $case, 'jaksas' => $jaksas, 'pasals' => $pasals, 'spt_subyek' => $spt_subyek, 'spt_id' => $spt_id]);
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
            'no_surat_perkara'      => 'required',
            'tanggal_surat_perkara' => 'required'
        ]);

        $kasus_id = $request->id;
        $spt_id = $request->spt_id;
        $status_rp3mum = $request->status_rp3mum;
        if ($status_rp3mum == Kasus::STATUS_DIALIHKAN OR $status_rp3mum == Kasus::STATUS_DIHENTIKAN) {
            // Update status menjadi arsip
            $status_rp3mum_partial = $request->status_rp3mum;
            $case = Kasus::find($kasus_id);
            if ($case) {
                $case->update($request->only('disposisi','status_rp3mum') + ['status_rp3mum_partial' => $status_rp3mum_partial]);
            }
        } else {
            $kasus_rp3mum = Kasus::join('kasus_subyek','kasus_subyek.kasus_id','=','kasus.id')
                ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
                ->where('subyek.status',1)
                ->where('kasus.id',$kasus_id)
                ->count();

            if ($kasus_rp3mum > 0) {
                $status_rp3mum_partial = 0;
            } else {
                $status_rp3mum_partial = 3;
            }

            $case = Kasus::find($kasus_id);
            if ($case) {
                $case->update($request->only('disposisi','status_rp3mum') + ['status_rp3mum_partial' => $status_rp3mum_partial, 'status_rp3sus' => Kasus::STATUS_BARU]);

                $surat = Surat::create($request->only('no_surat_perkara','tanggal_surat_perkara') + ['kasus_id' => $case->id, 'tipe_surat' => 'RP3SUS']);
                if ($surat) {
                    $surat_id = $surat->id;
                    $spt = Spt::find($spt_id);
                    $spt->update(['surat_id' => $surat_id]);
                }

                $jaksas = $request->jaksa_id;
                if ($jaksas && !empty($jaksas)) {
                    foreach ($jaksas as $jaksa) {
                        $jaksa_id = intval($jaksa);
                        $findJaksa = Jaksa::find($jaksa_id);
                        $surat->jaksas()->attach($findJaksa);
                    }
                }

                $pasals = $request->pasal_id;
                if ($pasals && !empty($pasals)) {
                    foreach ($pasals as $pasal) {
                        $pasal_id = intval($pasal);
                        $findPasal = Pasal::find($pasal_id);
                        $surat->pasals()->attach($findPasal);
                    }
                }
            }
        }

        return redirect()->route('rp3sus.index');
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
        $spt = Spt::find($id);
        if ($spt) {
            $kasus_id = $spt->kasus_id;
            $surat_id = $spt->surat_id;
        }

        $case = Kasus::select(['kasus.*','surats.id as surat_id','no_surat_perkara','tanggal_surat_perkara','obyek.id as obyek_id','obyek_pidana','nilai_kontrak','kerugian_negara','pemulihan_aset'])
            ->join('surats','surats.kasus_id','=','kasus.id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->where('kasus.id',$kasus_id)
            ->where('surats.id',$surat_id)
            ->first();

        $spt_subyek = Spt::select(['spt_id','subyek_id','no_spt','nama_terlapor','lembaga','jabatan_resmi','jabatan_lain'])
            ->join('spt_subyek','spt.id','=','spt_subyek.spt_id')
            ->join('subyek','spt_subyek.subyek_id','=','subyek.id')
            ->where('spt.id', $id)
            ->get();
        
        $jaksas = Jaksa::select(['*'])
            ->orderBy('nama_jaksa')
            ->pluck('nama_jaksa', 'id');

        $pasals = Pasal::selectRaw('id, CONCAT_WS("-", "Pasal", pasal, ayat, huruf) AS pasal_name')
            ->orderBy('id')
            ->pluck('pasal_name', 'id');

        return view('rp3sus.rp3sus_edit', ['case' => $case, 'jaksas' => $jaksas, 'pasals' => $pasals, 'spt_subyek' => $spt_subyek, 'spt_id' => $id]);
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
        $spt_id = $request->spt_id;
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

    public function fp15($kasus_id)
    {
        $cases = array();
        $kasus = Kasus::select(['*'])
            ->where('kasus.id', $kasus_id)
            ->first();
        /*
        foreach ($kasus as $a) {
            $subyeks = array();
            $kasus_id = $a["id"];
            $kasus_subyek = KasusSubyek::select(['subyek_id','nama_terlapor','lembaga'])
                ->join('subyek','subyek.id','=','kasus_subyek.subyek_id')
                ->where('kasus_id',$kasus_id)
                ->get();
            foreach ($kasus_subyek as $b) {
                array_push($subyeks, $b);
            }
            $a["subyeks"] = $subyeks;
            
        }
        array_push($cases, $a);
        */
        
        if ($kasus && !empty($kasus)) {
            return view('rp3sus.p15_create', ['case' => $kasus]);
        }        
    }

    public function fp15a($kasus_id)
    {
        return view('rp3sus.p15a_create');
    }
}
