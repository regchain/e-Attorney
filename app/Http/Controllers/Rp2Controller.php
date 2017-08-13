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

class Rp2Controller extends Controller
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
            ->where('status_rp1', Kasus::STATUS_DITERUSKAN)
            ->where('status_rp2', '<>', 0)
            ->orderBy('status_rp2')
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
            return view('rp2.rp2_list', ['cases' => $cases]);
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
        $case = Kasus::select(['kasus.*','subyek.id as subyek_id','subyek.nama_terlapor','subyek.lembaga','obyek.id as obyek_id','obyek.obyek_pidana','obyek.nilai_kontrak','surats.id as surat_id','surats.no_surat_perkara','surats.tanggal_surat_perkara'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->join('surats','kasus.id','=','surats.kasus_id')
            ->where('kasus.id',$id)
            ->where('tipe_surat','=','RP2')
            ->first();

        $kasus_jaksa = KasusJaksa::select(['kasus_jaksas.*','nama_jaksa'])
            ->join('jaksas','kasus_jaksas.jaksa_id','=','jaksas.id')
            ->where('kasus_id',$id)
            ->get();
        
        if ($case && !empty($case)) {
            return view('rp2.rp2_edit', ['case' => $case, 'kasus_jaksa' => $kasus_jaksa, 'status_rp2' => $case->status_rp2]);
        } else {
            return redirect()->route('rp2.index');
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
            $obyek->update($request->only('nilai_kontrak','obyek_pidana'));
        }
        
        $subyek = Subyek::find($request->subyek_id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor','lembaga'));
        }

        $surat = Surat::find($request->surat_id);
        if ($surat) {
            $surat->update($request->only('tanggal_surat_perkara','no_surat_perkara'));
        }
        
        return redirect()->route('rp2.index');
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
