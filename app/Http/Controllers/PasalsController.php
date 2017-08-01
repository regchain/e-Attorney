<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasal;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;

class PasalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $pasals = Pasal::select(['id', 'pasal', 'ayat', 'keterangan']);
            return Datatables::of($pasals)
                ->addColumn('action', function($pasals) {
                    return view('datatable._action', [
                        'model'     => $pasals,
                        'form_url'  => route('pasal.destroy', $pasals->id),
                        'edit_url'  => route('pasal.edit', $pasals->id),
                        'confirm_message' => 'Yakin mau menghapus ' . $pasals->pasal . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'pasal', 'name' => 'pasal', 'title' => 'Pasal'])
            ->addColumn(['data' => 'ayat', 'name' => 'ayat', 'title' => 'Ayat'])
            ->addColumn(['data' => 'keterangan', 'name' => 'keterangan', 'title' => 'Keterangan', 'width' => '75%'])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => 'Aksi', 'orderable' => false, 'searchable' => false]);

        return view('pasal.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasal.create');
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
            'undang_undang'     => 'required',
            'pasal'             => 'required|numeric',
            'ayat'              => 'required|numeric',
            'keterangan'        => 'required',
            'masa_hukuman_min'  => 'required|numeric',
            'masa_hukuman_max'  => 'required|numeric',
            'denda_min'         => 'required|numeric',
            'denda_max'         => 'required|numeric',
            'kategori_pasal'    => 'required'
        ]);

        $pasal = Pasal::create($request->all());
        Session::flash("flash_notification", [
            "level"     => "info",
            "message"   => "Berhasil menyimpan $pasal->pasal"
        ]);

        return redirect()->route('pasal.index');
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
        $pasal = Pasal::find($id);
        return view('pasal.edit')->with(compact('pasal'));
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
            'undang_undang'     => 'required',
            'pasal'             => 'required|numeric',
            'ayat'              => 'required|numeric',
            'keterangan'        => 'required',
            'masa_hukuman_min'  => 'required|numeric',
            'masa_hukuman_max'  => 'required|numeric',
            'denda_min'         => 'required|numeric',
            'denda_max'         => 'required|numeric',
            'kategori_pasal'    => 'required'
        ]);

        $pasal = Pasal::find($id);
        $pasal->update($request->only('undang_undang','pasal','ayat','keterangan','masa_hukuman_min','masa_hukuman_max','denda_min','denda_max','kategori_pasal'));
        Session::flash("flash_notification", [
            "level"     => "success",
            "message"   => "Berhasil menyimpan update $pasal->undang_undang pasal $pasal->pasal"
        ]);

        return redirect()->route('pasal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasal::destroy($id);

        Session::flash("flash_notification", [
            "level"     => "success",
            "message"   => "Pasal berhasil dihapus"
        ]);

        return redirect()->route('pasal.index');
    }
}
