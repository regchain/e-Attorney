<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Subyek;
use App\KasusSubyek;
use App\KategoriSubyek;
use App\Spt;

class SubyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subyeks = Subyek::select(['*'])
            ->where('status','<>',0)
            ->where('nama_terlapor','<>','Belum ada')
            ->where('nama_terlapor','<>','')
            ->paginate(10);

        return view('subyek.subyek_list', ['subyeks' => $subyeks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($kasus_id)
    {
        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        return view('subyek.subyek_create', ['kategori_subyek' => $kategori_subyek, 'kasus_id' => $kasus_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $kasus_id)
    {
        $this->validate($request, [
            'nama_terlapor'     => 'required',
            'lembaga'           => 'required',
        ]);

        $subyek = Subyek::create($request->all());
        if ($subyek) {
            $subyek_id = $subyek->id;
        }

        $kasus_subyek_data = array("kasus_id" => $kasus_id, "subyek_id" => $subyek_id);
        $kasus_subyek = KasusSubyek::create($kasus_subyek_data);

        if ($kasus_subyek) {
            return redirect()->route('rp3mum.index');
        }
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
    public function edit($kasus_id, $id)
    {
        $subyek = Subyek::find($id);

        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        return view('subyek.subyek_edit', ['kategori_subyek' => $kategori_subyek, 'subyek' => $subyek, 'kasus_id' => $kasus_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kasus_id, $id)
    {
        $this->validate($request, [
            'nama_terlapor'     => 'required',
            'lembaga'           => 'required'
        ]);

        $subyek = Subyek::find($id);
        if ($subyek) {
            $subyek->update($request->all());    
        }
        
        return redirect()->route('rp3mum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kasus_id, $id)
    {
        Subyek::destroy($id);

        return redirect()->route('rp3mum.index');
    }

    public function tersangka($kasus_id)
    {
        $case = Kasus::select(['kasus.*','no_surat_perkara','tanggal_surat_perkara'])
            ->join('surats','kasus.id','=','surats.kasus_id')
            ->where('kasus.id', $kasus_id)
            ->where('surats.tipe_surat','=','RP3MUM')
            ->orderBy('surats.id', 'desc')
            ->first();

        $subyeks = Subyek::select(['subyek.*','subyek_id','kategori_subyeks.name'])
            ->join('kasus_subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kategori_subyeks','kategori_subyeks.id','=','subyek.kategori_subyek_id')
            ->where('kasus_subyek.kasus_id', $kasus_id)
            ->where('subyek.status', 1)
            ->get();

        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');
        
        return view('subyek.subyek_tersangka_create', ['case' => $case, 'subyeks' => $subyeks, 'kategori_subyek' => $kategori_subyek, 'kasus_id' => $kasus_id]);
    }

    public function tahan($subyek_id)
    {
        $subyek = Subyek::select(['subyek.*','kategori_subyeks.name'])
            ->join('kategori_subyeks','kategori_subyeks.id','=','subyek.kategori_subyek_id')
            ->where('subyek.id', $subyek_id)
            ->first();

        $spt_subyek = Spt::select(['spt.id as spt_id','no_spt','tanggal_spt'])
            ->join('spt_subyek','spt.id','=','spt_subyek.spt_id')
            ->join('subyek','subyek.id','=','spt_subyek.subyek_id')
            ->where('subyek.id', $subyek_id)
            ->where('jenis_spt', 'TAHANAN')
            ->first();

        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        $surat_dikmum = Subyek::select(['no_surat_perkara','kasus_posisi'])
            ->join('kasus_subyek','subyek.id','=','kasus_subyek.subyek_id')
            ->join('kasus','kasus.id','=','kasus_subyek.kasus_id')
            ->join('surats','kasus.id','=','surats.kasus_id')
            ->where('subyek.id', $subyek_id)
            ->first();

        if ($spt_subyek) {
            return view('subyek.subyek_tahan_create', ['subyek' => $subyek, 'kategori_subyek' => $kategori_subyek, 'spt_id' => $spt_subyek->spt_id, 'no_spt' => $spt_subyek->no_spt, 'tanggal_spt' => $spt_subyek->tanggal_spt, 'surat_dikmum' => $surat_dikmum]);
        } else {
            return view('subyek.subyek_tahan_create', ['subyek' => $subyek, 'kategori_subyek' => $kategori_subyek, 'spt_id' => '', 'no_spt' => '', 'tanggal_spt' => date('Y-m-d'), 'surat_dikmum' => $surat_dikmum]);
        }
    }

    public function tahanupdate(Request $request, $id)
    {
        $this->validate($request, [
            'no_p15'      => 'required',
            'tanggal_p15' => 'required'
        ]);

        $spt = Spt::find($id);
        if ($spt) {
            $kasus_id = $spt->kasus_id;
            $surat_id = $spt->surat_id;
        }

        $p15a_id = $request->p15a_id;
        if ($p15a_id) {
            $surat_p15a = SuratP15::find($p15a_id);
            if ($surat_p15a) {
                $surat_p15a->update($request->only('no_p15','tanggal_p15'));
            }
        } else {
            $surat_p15a = SuratP15::create($request->only('no_p15','tanggal_p15') + ['surat_id' => $surat_id, 'judul_p15' => 'SURAT PERINTAH PENYERAHAN TANGGUNGJAWAB TERSANGKA DAN BARANG BUKTINYA', 'jenis_p15' => 'P-15A']);
        }       

        return redirect()->route('rp3sus.index');
    }
}
