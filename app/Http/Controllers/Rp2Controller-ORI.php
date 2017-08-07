<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;

class Rp2ControllerORI extends Controller
{
		public function index()
		{
            $cases = Kasus::where('status', Kasus::STATUS_DITERUSKAN)->get();
		    return view('rp2.rp2_list', ['cases' => $cases]);
		}

		public function frp2(Kasus $case)
		{
		    return view('rp2.rp2_create', ['case' => $case]);
		}

		public function erp2()
		{
		    return view('rp2.rp2_edit');
		}
}
