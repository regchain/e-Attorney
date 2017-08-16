<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Surat;
use App\Jaksa;
use App\BarangBukti;

class ObyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = array();
        $kasus = Kasus::select(['kasus.*','obyek_id','pemulihan_aset'])
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->where('status_rp2', Kasus::STATUS_DITERUSKAN)
            ->where('status_rp3mum', Kasus::STATUS_BARU)
            ->orderBy('status_rp3mum')
            ->get();

        foreach ($kasus as $case) {
            $surats = array();
            
            $kasus_id = $case["id"];
            $obyek_id = $case["obyek_id"];
            $surat_obyek = Surat::select(['surats.*','barang_sitaan','nilai_pemulihan_aset'])
                ->join('surat_obyek','surats.id','=','surat_obyek.surat_id')
                ->join('barang_bukti','surats.id','=','barang_bukti.surat_id')
                ->where('surats.kasus_id',$kasus_id)
                ->where('surat_obyek.obyek_id',$obyek_id)
                ->get();

            foreach ($surat_obyek as $surat) {
                array_push($surats, $surat);
            }

            $case["surats"] = $surats;
            array_push($cases, $case);
        }
        
        return view('obyek.obyek_list', ['cases' => $cases]);
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
            $pemulihan_aset = $obyek->pemulihan_aset;
            $pemulihan_aset += $request->nilai_pemulihan_aset;
            $obyek->update(['pemulihan_aset' => $pemulihan_aset]);
        }

        $surat_data = array(
            "kasus_id" => $kasus_id,
            "no_surat_perkara" => $request->no_surat_perkara, 
            "tanggal_surat_perkara" => $request->tanggal_surat_perkara,
            "tindakan" => $request->tindakan,
            "tipe_surat" => $request->tipe_surat
        );

        $surat = Surat::create($surat_data);
        if ($surat) {
            $surat->obyeks()->attach($obyek);
            $barang_bukti = BarangBukti::create($request->only('barang_sitaan', 'nilai_pemulihan_aset') + ['surat_id' => $surat->id, 'obyek_id' => $obyek_id]);
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
    public function edit($id, $surat_id)
    {
        if ($id && $surat_id) {
            $surat = Surat::select(['surats.*','barang_bukti.obyek_id','barang_sitaan','nilai_pemulihan_aset'])
                ->join('barang_bukti','surats.id','=','barang_bukti.surat_id')
                ->where('surats.id', $surat_id)
                ->first();
        }
        
        $jaksas = Jaksa::select(['*'])
            ->orderBy('nama_jaksa')
            ->pluck('nama_jaksa', 'id');

        return view('obyek.obyek_edit', ['jaksas' => $jaksas, 'surat' => $surat, 'kasus_id' => $id, 'obyek_id' => $surat->obyek_id, 'tipe_surat' => $surat->tipe_surat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $surat_id)
    {
        $this->validate($request, [
            'tipe_surat'            => 'required',
            'no_surat_perkara'      => 'required',
            'tanggal_surat_perkara' => 'required'
        ]);
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
