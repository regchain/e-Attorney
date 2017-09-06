<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Subyek;
use App\KasusSubyek;
use App\KategoriSubyek;

class SubyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subyeks = Subyek::select(['*'])->paginate(10);
        if ($subyeks) {
            return view('subyek.subyek_list', ['subyeks' => $subyeks]);
        }
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
    public function edit($id)
    {
        //
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
            'lembaga'           => 'required',
        ]);

        $subyek = Subyek::find($id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor', 'lembaga', 'kewarganegaraan') + ['status' => Subyek::STATUS_TERSANGKA]);    
        }
        
        return redirect('/tersangka/'. $kasus_id);
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

    public function tahan()
    {
        return view('subyek.subyek_tahan_create');
    }
}
