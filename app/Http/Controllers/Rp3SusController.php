<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;
use App\KasusSubyek;

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
        $kasus = Kasus::select(['*'])
            ->where('kasus.status', Kasus::STATUS_DITERUSKAN)
            ->where('kasus.no_surat_rp2', '<>', NULL)
            ->get();

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
        
        if ($cases && !empty($cases)) {
            return view('rp3sus.rp3sus_list', ['cases' => $cases]);
        }
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
        return view('rp3sus.rp3sus_edit');
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
