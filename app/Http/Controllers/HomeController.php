<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function trial()
    {
        return view('trial');
    }
  

    public function master_penyidikan()
    {
        return view('master_penyidikan');
    }

    public function master_penuntutan()
    {
        return view('master_penuntutan');
    }
}
