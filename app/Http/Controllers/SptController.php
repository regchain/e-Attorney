<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spt;
use App\Subyek;

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
        $this->validate($request, [
            'no_spt'        => 'required',
            'tanggal_spt'   => 'required',
            'kasus_id'      => 'required'
        ]);

        $spt = Spt::create($request->only('kasus_id','no_spt','tanggal_spt') + ['judul_spt' => 'Surat Penetapan Tersangka', 'jenis_spt' => 'TERSANGKA']);

        if ($spt) {
            $spt_id = $spt->id;
            $status_subyek = $request->status_subyek;
            if ($status_subyek && !empty($status_subyek)) {
                foreach ($status_subyek as $status) {
                    $subyek_id = intval($status);
                    $findSubyek = Subyek::find($subyek_id);
                    $spt->subyeks()->attach($findSubyek);
                    $findSubyek->update(['status' => Subyek::STATUS_TERSANGKA]);
                }
            }
        }

        return redirect('/diksus/'. $request->kasus_id .'/spt/'. $spt_id);
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
