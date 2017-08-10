<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;

class Rp1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = Kasus::where('no_surat_rp2', NULL)->get();
        if ($cases && !empty($cases)) {
            return view('rp1.rp1_list', ['cases' => $cases]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rp1.rp1_create');
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
            'judul_kasus'            => 'required',
            'lembaga'              => 'required',
            'obyek_pidana' => 'required'
        ]);

        $case = Kasus::create($request->all() + ['status' => Kasus::STATUS_BARU]);
        $obyek = Obyek::create($request->only('obyek_pidana') + ['kasus_id' => $case->id]);
        $subyek = Subyek::create($request->only('nama_terlapor', 'lembaga'));
        
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
        $case = Kasus::select(['kasus.*','subyek.id as subyek_id','subyek.nama_terlapor','subyek.lembaga','obyek.id as obyek_id','obyek.obyek_pidana'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('obyek','kasus.id','=','obyek.kasus_id')
            ->where('kasus.id',$id)
            ->first();

        if ($case && !empty($case)) {
            return view('rp1.rp1_edit')->with(compact('case'));
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
            'asal_surat'            => 'required',
            'no_surat'              => 'required',
            'tanggal_surat_pelapor' => 'required'
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
