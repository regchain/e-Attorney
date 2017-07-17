<?php

namespace App\Http\Controllers;

use App\Tabel_User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.user_list');
    }

    public function fjaksa()
    {
        return view('user.user_create');
    }

    public function ejaksa()
    {
        return view('user.user_edit');
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
     * @param  \App\Tabel_User  $tabel_User
     * @return \Illuminate\Http\Response
     */
    public function show(Tabel_User $tabel_User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabel_User  $tabel_User
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabel_User $tabel_User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabel_User  $tabel_User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabel_User $tabel_User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabel_User  $tabel_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabel_User $tabel_User)
    {
        //
    }
}
