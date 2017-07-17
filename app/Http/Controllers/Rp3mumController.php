<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rp3mumController extends Controller
{
		public function index()
		{
		    return view('rp3mum.rp3mum_list');
		}

		public function frp3mum()
		{
		    return view('rp3mum.rp3mum_create');
		}

		public function erp3mum()
		{
		    return view('rp3mum.rp3mum_edit');
		}
}