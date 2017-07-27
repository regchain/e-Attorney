<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rp3susController extends Controller
{
		public function index()
		{
		    return view('rp3sus.rp3sus_list');
		}

		public function frp3sus()
		{
		    return view('rp3sus.rp3sus_create');
		}

		public function erp3sus()
		{
		    return view('rp3sus.rp3sus_edit');
		}

		public function fp15()
		{
		    return view('rp3sus.p15_create');
		}

		public function fp15a()
		{
		    return view('rp3sus.p15a_create');
		}
}
