<?php

namespace App\Http\Controllers;

use App\Rp1;
use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;

class Rp1Controller extends Controller
{
		public function index()
		{
            $cases = Kasus::where('status', Kasus::STATUS_BARU)->get();
		    return view('rp1.rp1_list', ['cases' => $cases]);
		}

		public function frp1()
		{
		    return view('rp1.rp1_create');
		}

		public function frp1Store(Request $request)
		{
            $case = Kasus::create($request->all() + ['status' => Kasus::STATUS_BARU]);
            $obyek = Obyek::create($request->only('obyek_pidana') + ['kasus_id' => $case->id]);
            $subyek = Subyek::create($request->only('nama_terlapor', 'lembaga'));
            // attach relationship
            $case->subyeks()->attach($subyek);

		    return redirect('/rp1');
		}

		public function erp1()
		{
		    return view('rp1.rp1_edit');
		}
        
        public function lidik(Kasus $case)
        {
            return view('rp1.lidik_create', ['case' => $case]);
        }

        public function lidikStore(Request $request, Kasus $case)
        {
            $case->update($request->only('status', 'kasus_posisi', 'disposisi'));
            $obyek = $case->obyek;
            if ($obyek) {
                $obyek->update($request->only('obyek_pidana', 'nilai_kontrak'));
            } else {
                $obyek = Obyek::create($request->only('obyek_pidana', 'nilai_kontrak') + ['kasus_id' => $case->id]);
            }

            $subyek = $case->subyeks()->first();
            $statusSubyek = $request->get('status') == Kasus::STATUS_DITERUSKAN ? Subyek::STATUS_TERSANGKA : Subyek::STATUS_TERLAPOR;
            if ($subyek) {
                $subyek->update($request->only('lembaga', 'nama_terlapor', 'tanggal_rp2', 'no_surat_rp2') + ['status' => $statusSubyek]);
            } else {
                $subyek = Subyek::create($request->only('lembaga', 'nama_terlapor', 'tanggal_rp2', 'no_surat_rp2') + ['status' => $statusSubyek]);
                $case->subyeks()->attach($subyek);
            }

            return redirect('/rp2');

        }
}
