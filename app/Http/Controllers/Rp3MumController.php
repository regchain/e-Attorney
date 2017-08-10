<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;
use App\KasusSubyek;
use App\KasusObyek;

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
            ->where('kasus.status', Kasus::STATUS_DITERUSKAN)
            ->where('kasus.no_surat_rp2', '<>', NULL)
            ->get();

        foreach ($kasus as $case) {
            $subyeks = array();
            $obyeks = array();

            $kasus_id = $case["id"];
            $kasus_subyek = KasusSubyek::select(['subyek_id','nama_terlapor','lembaga'])
                ->join('subyek','subyek.id','=','kasus_subyek.subyek_id')
                ->where('kasus_id',$kasus_id)
                ->get();
            foreach ($kasus_subyek as $subyek) {
                array_push($subyeks, $subyek);
            }
            
            $kasus_obyek = KasusObyek::select(['obyek_id','nilai_kontrak','kerugian_negara','pemulihan_aset','obyek_pidana','benda_sitaan'])
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
        
        if ($cases && !empty($cases)) {
            return view('rp3mum.rp3mum_list', ['cases' => $cases]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rp3mum.rp3mum_create');
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
        return view('rp3mum.rp3mum_edit');
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
