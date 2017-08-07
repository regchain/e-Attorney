<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;
use App\Jaksa;

class LidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $case = Kasus::select(['kasus.*','subyek.id as subyek_id','subyek.nama_terlapor','subyek.lembaga','obyek.nilai_kontrak','obyek.id as obyek_id','obyek.obyek_pidana'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('obyek','kasus.id','=','obyek.kasus_id')
            ->where('kasus.id',$id)
            ->first();

        if ($case && !empty($case)) {
            return view('rp1.rp1_lidik')->with(compact('case'));
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
            'judul_kasus'           => 'required',
            'kasus_posisi'          => 'required'
        ]);

        $status = $request->status;
        if ($status == Kasus::STATUS_DIALIHKAN OR $status == Kasus::STATUS_DIHENTIKAN) {
            // Update status menjadi arsip
            $case = Kasus::find($id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status'));
            }
        } else {
            $case = Kasus::find($id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status'));
                
                $kasus_rp2 = $case->toArray();
                $newCase = Kasus::create($kasus_rp2);
                $caseID = $newCase->id;

                $updateNewCase = Kasus::find($caseID);
                $updateNewCase->update($request->only('tanggal_rp2','no_surat_rp2'));
            }
        }

        // Update subyek
        $subyek = Subyek::find($request->subyek_id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor','lembaga'));
        }

        // Update obyek
        $obyek = Obyek::find($request->obyek_id);
        if ($obyek) {
            $obyek->update($request->only('obyek_pidana','nilai_kontrak'));
        }

        $newCase->subyeks()->attach($subyek);
        $newCase->obyeks()->attach($obyek);

        $jaksas = $request->jaksa_id;
        if ($jaksas && !empty($jaksas)) {
            foreach ($jaksas as $jaksa) {
                $jaksa_id = intval($jaksa);
                $findJaksa = Jaksa::find($jaksa_id);
                $newCase->jaksas()->attach($findJaksa);
            }
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
