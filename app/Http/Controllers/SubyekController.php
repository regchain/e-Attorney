<?php

namespace App\Http\Controllers;

use App\Tabel_Subyek;
use Illuminate\Http\Request;

class SubyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subyek.subyek_list');
    }

    public function frt1()
    {
        return view('subyek.subyek_tsk_create');
    }

    public function frt2()
    {
        return view('subyek.subyek_tahan_create');
    }

    public function ert1()
    {
        return view('subyek.subyek_edit');
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
     * @param  \App\Tabel_Subyek  $tabel_Subyek
     * @return \Illuminate\Http\Response
     */
    public function show(Tabel_Subyek $tabel_Subyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabel_Subyek  $tabel_Subyek
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabel_Subyek $tabel_Subyek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabel_Subyek  $tabel_Subyek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabel_Subyek $tabel_Subyek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabel_Subyek  $tabel_Subyek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabel_Subyek $tabel_Subyek)
    {
        //
    }
}
