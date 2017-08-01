<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriSubyek;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class KategoriSubyeksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $kategori_subyeks = KategoriSubyek::select(['id', 'name']);
            return Datatables::of($kategori_subyeks)
                ->addColumn('action', function($kategori_subyeks) {
                    return view('datatable._action', [
                        'model'     => $kategori_subyeks,
                        'form_url'  => route('kategori_subyek.destroy', $kategori_subyeks->id),
                        'edit_url'  => route('kategori_subyek.edit', $kategori_subyeks->id),
                        'confirm_message' => 'Yakin mau menghapus ' . $kategori_subyeks->name . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => 'Kategori Subyek'])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => 'Aksi', 'orderable' => false, 'searchable' => false]);

        return view('kategori_subyek.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_subyek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|unique:kategori_subyeks']);
        $kategori_subyek = KategoriSubyek::create($request->only('name'));
        Session::flash("flash_notification", [
            "level"     => "info",
            "message"   => "Berhasil menyimpan $kategori_subyek->name"
        ]);

        return redirect()->route('kategori_subyek.index');
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
        $kategori_subyek = KategoriSubyek::find($id);
        return view('kategori_subyek.edit')->with(compact('kategori_subyek'));
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
        $this->validate($request, ['name' => 'required|unique:kategori_subyeks,name, '. $id]);
        $kategori_subyek = KategoriSubyek::find($id);
        $kategori_subyek->update($request->only('name'));
        Session::flash("flash_notification", [
            "level"     => "info",
            "message"   => "Berhasil menyimpan update $kategori_subyek->name"
        ]);

        return redirect()->route('kategori_subyek.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KategoriSubyek::destroy($id);

        Session::flash("flash_notification", [
            "level"     => "info",
            "message"   => "Kategori subyek berhasil dihapus"
        ]);

        return redirect()->route('kategori_subyek.index');
    }
}
