<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SptController extends Controller
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
        var_dump($request->status); die;
        $this->validate($request, [
            'judul_kasus'   => 'required',
            'lembaga'       => 'required',
            'nilai_kontrak' => 'required',
            'obyek_pidana'  => 'required'
        ]);

        $kasus_id = $request->id;
        $status_rp2 = $request->status_rp2;
        if ($status_rp2 == Kasus::STATUS_DIALIHKAN OR $status_rp2 == Kasus::STATUS_DIHENTIKAN) {
            // Update status menjadi arsip
            $case = Kasus::find($kasus_id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status_rp2'));
            }
        } else {
            $case = Kasus::find($kasus_id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status_rp2') + ['status_rp3mum' => Kasus::STATUS_BARU]);

                $surat = Surat::create($request->only('no_surat_perkara','tanggal_surat_perkara') + ['kasus_id' => $case->id, 'tipe_surat' => 'RP3MUM']);

                $jaksas = $request->jaksa_id;
                if ($jaksas && !empty($jaksas)) {
                    foreach ($jaksas as $jaksa) {
                        $jaksa_id = intval($jaksa);
                        $findJaksa = Jaksa::find($jaksa_id);
                        $surat->jaksas()->attach($findJaksa);
                    }
                }
            }
        }

        // Update subyek
        $subyek = Subyek::find($request->subyek_id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor','lembaga','jabatan_resmi','jabatan_lain','kategori_subyek_id'));
        }

        // Update obyek
        $obyek = Obyek::find($request->obyek_id);
        if ($obyek) {
            $obyek->update($request->only('obyek_pidana','nilai_kontrak','kerugian_negara','pemulihan_aset'));
        }

        return redirect()->route('rp2.index');
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
