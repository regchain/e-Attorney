<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Jaksa;
use App\Surat;

class ObyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('obyek.obyek_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($kasus_id)
    {
        $case = Kasus::select(['kasus.id', 'obyek_id'])
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.obyek_id')
            ->where('kasus.id', $kasus_id)
            ->first();
        
        if ($case && !empty($case)) {
            $obyek_id = $case->obyek_id;
            $kasus_id = $case->id;
        }

        $jaksas = Jaksa::select(['*'])
            ->orderBy('nama_jaksa')
            ->pluck('nama_jaksa', 'id');

        return view('obyek.obyek_create', ['jaksas' => $jaksas, 'obyek_id' => $obyek_id, 'kasus_id' => $kasus_id]);
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
            'tipe_surat'            => 'required',
            'no_surat_perkara'      => 'required',
            'tanggal_surat_perkara' => 'required'
        ]);

        $obyek_id = $request->obyek_id;
        $obyek = Obyek::find($obyek_id);
        if ($obyek) {
            $obyek->update($request->only('pemulihan_aset'));
        }

        $surat_data = array(
            "kasus_id" => $kasus_id,
            "no_surat_perkara" => $request->no_surat_perkara, 
            "tanggal_surat_perkara" => $request->tanggal_surat_perkara,
            "tindakan" => $request->tindakan,
            "keterangan" => $request->keterangan,
            "tipe_surat" => $request->tipe_surat
        );

        $surat = Surat::create($surat_data);
        if ($surat) {
            $surat->obyeks()->attach($obyek);
        }

        $jaksas = $request->jaksa_id;
        if ($jaksas && !empty($jaksas)) {
            foreach ($jaksas as $jaksa) {
                $jaksa_id = intval($jaksa);
                $findJaksa = Jaksa::find($jaksa_id);
                $surat->jaksas()->attach($findJaksa);
            }
        }

        return redirect()->route('rp3mum.index');
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
    public function update(Request $request, $id)
    {
        //
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
