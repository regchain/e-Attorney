<?php

namespace App\Http\Controllers;

use App\Tabel_Obyek;
use Illuminate\Http\Request;

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

    public function geledah()
    {
        return view('obyek.obyek_create');
    }

    public function erb1()
    {
        return view('obyek.obyek_edit');
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
     * @param  \App\Tabel_Obyek  $tabel_Obyek
     * @return \Illuminate\Http\Response
     */
    public function show(Tabel_Obyek $tabel_Obyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabel_Obyek  $tabel_Obyek
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabel_Obyek $tabel_Obyek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabel_Obyek  $tabel_Obyek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabel_Obyek $tabel_Obyek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabel_Obyek  $tabel_Obyek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabel_Obyek $tabel_Obyek)
    {
        //
    }
}
