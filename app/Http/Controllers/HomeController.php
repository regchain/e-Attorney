<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasus;
use App\Subyek;
use App\KategoriSubyek;
use App\Pasal;
use App\Spt;

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
        $dashboard = array();
        
        $kasus_rp2 = Kasus::where('status_rp2',1)
            ->where('status_rp3mum', 0)
            ->count();

        $kasus_rp3mum = Kasus::where('status_rp3mum',1)
            ->where('status_rp3sus', 0)
            ->count();

        $kasus_rp3sus = Spt::join('kasus','spt.kasus_id','=','kasus.id')
            ->join('surats','spt.surat_id','=','surats.id')
            ->where('surats.tipe_surat','=','RP3SUS')
            ->where('kasus.status_rp3sus',1)->count();

        $tahanan = Subyek::where('status', Subyek::STATUS_TAHANAN)->count();
        
        $subyek_hukum = KategoriSubyek::selectRaw('name, count(kategori_subyek_id) as total')
            ->join('subyek','kategori_subyeks.id','=','subyek.kategori_subyek_id')
            ->where('subyek.status','<>',0)
            ->groupBy('kategori_subyeks.name')
            ->get();

        $obyek_pidana = Pasal::selectRaw('kategori_pasal, count(obyek.id) as total')
            ->join('surat_pasal','pasals.id','=','surat_pasal.pasal_id')
            ->join('surats','surats.id','=','surat_pasal.surat_id')
            ->join('kasus','kasus.id','=','surats.kasus_id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','obyek.id','=','kasus_obyek.obyek_id')
            ->where('kasus.status_rp3sus','<>',0)
            ->groupBy('kategori_pasal')
            ->get();
        
        $dashboard["kasus_rp2"] = $kasus_rp2;
        $dashboard["kasus_rp3mum"] = $kasus_rp3mum;
        $dashboard["kasus_rp3sus"] = $kasus_rp3sus;
        $dashboard["tahanan"] = $tahanan;
        
        return view('home', ['dashboard' => $dashboard, 'subyek_hukum' => $subyek_hukum, 'obyek_pidana' => $obyek_pidana]);
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
