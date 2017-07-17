<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function penyidikan()
    {
        return view('layouts.penyidikan');
    }

}
