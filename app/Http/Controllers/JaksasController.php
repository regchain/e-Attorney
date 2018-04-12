<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jaksa;
use App\SuratJaksa;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;

class JaksasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $jaksas = Jaksa::select(['id', 'nip', 'nama_jaksa', 'pangkat', 'telepon']);
            return Datatables::of($jaksas)
                ->addColumn('action', function($jaksas) {
                    return view('decay-case.datatable._action', [
                        'model'     => $jaksas,
                        'form_url'  => route('jaksa.destroy', $jaksas->id),
                        'edit_url'  => route('jaksa.edit', $jaksas->id),
                        'confirm_message' => 'Yakin mau menghapus ' . $jaksas->nama_jaksa . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'nip', 'name' => 'nip', 'title' => 'NIP'])
            ->addColumn(['data' => 'nama_jaksa', 'name' => 'nama_jaksa', 'title' => 'Nama Jaksa'])
            ->addColumn(['data' => 'pangkat', 'name' => 'pangkat', 'title' => 'Pangkat'])
            ->addColumn(['data' => 'telepon', 'name' => 'telepon', 'title' => 'No Telepon / HP'])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => 'Aksi', 'orderable' => false, 'searchable' => false, 'width' => '15%']);

        return view('core.jaksa.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('core.jaksa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nip'           => 'required|unique:jaksas,nip',
            'nama_jaksa'    => 'required',
            'pangkat'       => 'required',
            'telepon'       => 'required|numeric|unique:jaksas,telepon'
        ]);

        $jaksa = Jaksa::create($request->all());
        Session::flash("flash_notification", [
            "level"     => "info",
            "message"   => "Berhasil menyimpan $jaksa->nama_jaksa"
        ]);

        return redirect()->route('jaksa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jaksa = Jaksa::find($id);
        return view('core.jaksa.edit')->with(compact('jaksa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nip'           => 'required|unique:jaksas,nip, '. $id,
            'nama_jaksa'    => 'required',
            'pangkat'       => 'required',
            'telepon'       => 'required|numeric|unique:jaksas,telepon, '. $id
        ]);

        $jaksa = Jaksa::find($id);
        $jaksa->update($request->only('nip','nama_jaksa','pangkat','telepon'));
        Session::flash("flash_notification", [
            "level"     => "info",
            "message"   => "Berhasil menyimpan update $jaksa->nama_jaksa"
        ]);

        return redirect()->route('jaksa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jaksa::destroy($id);

        Session::flash("flash_notification", [
            "level"     => "info",
            "message"   => "Jaksa berhasil dihapus"
        ]);

        return redirect()->route('jaksa.index');
    }

    public function deleteSuratJaksa($surat_jaksa_id, $tipe, $kasus_id)
    {
        if ($surat_jaksa_id) {
            SuratJaksa::destroy($surat_jaksa_id);

            Session::flash("flash_notification", [
                "level"     => "info",
                "message"   => "Jaksa berhasil dibatalkan"
            ]);
        }

        if ($tipe && !empty($tipe)) {
            switch ($tipe) {
                case 'RP2':
                    return redirect()->route('rp2.edit', $kasus_id);
                    break;

                case 'RP3MUM':
                    return redirect()->route('rp3mum.edit', $kasus_id);
                    break;
                
                case 'RP3SUS':
                    return redirect()->route('rp3sus.edit', $kasus_id);
                    break;

                default:
                    return redirect()->route('jaksa.index');
                    break;
            }
        }
    }
}
