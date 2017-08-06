<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Obyek;
use App\Subyek;

class Rp1ControllerOri extends Controller
{
	public function index()
	{
        $cases = Kasus::where('status', Kasus::STATUS_BARU)->get();
        if ($cases && !empty($cases)) {
            return view('rp1.rp1_list', ['cases' => $cases]);
        }
	}

	public function frp1()
	{
		return view('rp1.rp1_create');
	}

	public function frp1Store(Request $request)
	{
        $this->validate($request, [
            'asal_surat'        => 'required',
            'no_surat'          => 'required',
            'tanggal_surat_pelapor' => 'required'
        ]);

        $case = Kasus::create($request->all() + ['status' => Kasus::STATUS_BARU]);
        $obyek = Obyek::create($request->only('obyek_pidana') + ['kasus_id' => $case->id]);
        $subyek = Subyek::create($request->only('nama_terlapor', 'lembaga'));
        
        // attach relationship
        $case->subyeks()->attach($subyek);
        $case->obyeks()->attach($obyek);

		return redirect('/rp1');
	}

	public function erp1($id)
	{
        $case = Kasus::find($id);
        if ($case && !empty($case)) {
            return view('rp1.rp1_edit')->with(compact('case'));
        }		
	}

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'undang_undang'     => 'required',
            'pasal'             => 'required|numeric',
            //'ayat'              => 'required|numeric',
            'keterangan'        => 'required',
            //'masa_hukuman_min'  => 'required|numeric',
            //'masa_hukuman_max'  => 'required|numeric',
            //'denda_min'         => 'required|numeric',
            //'denda_max'         => 'required|numeric',
            'kategori_pasal'    => 'required'
        ]);

        $pasal = Pasal::find($id);
        $pasal->update($request->only('undang_undang','pasal','ayat','huruf','keterangan','masa_hukuman_min','masa_hukuman_max','denda_min','denda_max','kategori_pasal'));
        Session::flash("flash_notification", [
            "level"     => "success",
            "message"   => "Berhasil menyimpan update pasal $pasal->pasal"
        ]);

        return redirect()->route('pasal.index');
    }
        
    public function lidik(Kasus $case)
    {
        return view('rp2.rp2_create', ['case' => $case]);
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
