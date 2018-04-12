<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;

class Rp1Controller extends Controller
{
    private $service;
    public function __construct()
    {
        $this->service = new HelperController();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_param = "status_rp1";
        $status_value = Kasus::STATUS_BARU;

        $cases = $this->service->getKasus($status_param, $status_value);
        
        return view('decay-case.rp1.rp1_list', ['cases' => $cases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('decay-case.rp1.rp1_create');
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
            'judul_kasus'  => 'required',
            'lembaga'      => 'required',
            'obyek_pidana' => 'required'
        ]);

        $case = Kasus::create($request->all() + ['status_rp1' => Kasus::STATUS_BARU]);
        $obyek = Obyek::create($request->only('obyek_pidana'));
        $subyek = Subyek::create($request->only('nama_terlapor', 'lembaga') + ['kategori_subyek_id' => 1]);
        
        // attach relationship
        $case->subyeks()->attach($subyek);
        $case->obyeks()->attach($obyek);

        return redirect()->route('rp1.index');
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
        $case = $this->service->getKasusByID($id);

        if ($case && !empty($case)) {
            return view('decay-case.rp1.rp1_edit')->with(compact('case'));
        } else {
            return redirect()->route('rp1.index');
        }
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
            'judul_kasus'  => 'required',
            'lembaga'      => 'required',
            'obyek_pidana' => 'required'
        ]);

        $case = Kasus::find($id);
        if ($case) {
            $case->update($request->only('judul_kasus','nama_lengkap','alamat','kota','propinsi','kontak_telpon','kontak_handphone','kontak_email','kodepos','kasus_posisi','asal_surat','no_surat','tanggal_surat_pelapor','tanggal_surat_diterima','pembuat_catatan_surat'));
        }
        
        $obyek = Obyek::find($request->obyek_id);
        if ($obyek) {
            $obyek->update($request->only('obyek_pidana'));
        }
        
        $subyek = Subyek::find($request->subyek_id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor','lembaga'));
        }
        
        return redirect()->route('rp1.index');
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
