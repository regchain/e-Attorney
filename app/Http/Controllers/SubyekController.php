<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Kasus;
use App\Subyek;
use App\KasusSubyek;
use App\KategoriSubyek;
use App\Spt;
use Carbon\Carbon;

class SubyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terlapors = Subyek::select(['*'])
            ->where('status', Subyek::STATUS_TERLAPOR)
            ->where('nama_terlapor','<>','Belum ada')
            ->where('nama_terlapor','<>','')
            ->get();

        $tersangkas = Subyek::select(['*'])
            ->where('status', Subyek::STATUS_TERSANGKA)
            ->where('nama_terlapor','<>','Belum ada')
            ->where('nama_terlapor','<>','')
            ->get();

        $tahanans = Subyek::select(['*'])
            ->where('status', Subyek::STATUS_TAHANAN)
            ->where('nama_terlapor','<>','Belum ada')
            ->where('nama_terlapor','<>','')
            ->get();

        return view('decay-case.subyek.subyek_list', ['terlapors' => $terlapors, 'tersangkas' => $tersangkas, 'tahanans' => $tahanans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($kasus_id)
    {
        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        return view('decay-case.subyek.subyek_create', ['kategori_subyek' => $kategori_subyek, 'kasus_id' => $kasus_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $kasus_id)
    {
        $this->validate($request, [
            'nama_terlapor' => 'required',
            'lembaga'       => 'required',
            'foto'          => 'image|max:2048'
        ]);

        $subyek = Subyek::create($request->except('foto'));
        if ($subyek) {
            $subyek_id = $subyek->id;
        }

        if ($request->hasFile('foto')) {
            $uploaded_foto = $request->file('foto');
            $extension = $uploaded_foto->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'images';
            $uploaded_foto->move($destinationPath, $filename);
            
            $subyek->foto = $filename;
            $subyek->save();
        }

        $kasus_subyek_data = array("kasus_id" => $kasus_id, "subyek_id" => $subyek_id);
        $kasus_subyek = KasusSubyek::create($kasus_subyek_data);

        if ($kasus_subyek) {
            return redirect('subyek');
        }
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
    public function edit($kasus_id, $id)
    {
        $subyek = Subyek::find($id);

        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        return view('decay-case.subyek.subyek_edit', ['kategori_subyek' => $kategori_subyek, 'subyek' => $subyek, 'kasus_id' => $kasus_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kasus_id, $id)
    {
        $this->validate($request, [
            'nama_terlapor' => 'required',
            'lembaga'       => 'required',
            'foto'          => 'image|max:2048'
        ]);

        $subyek = Subyek::find($id);
        if ($subyek) {
            $subyek->update($request->all());    
        }

        if ($request->hasFile('foto')) {
            $filename = null;
            $uploaded_foto = $request->file('foto');
            $extension = $uploaded_foto->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'images';
            $uploaded_foto->move($destinationPath, $filename);

            if ($subyek->foto) {
                $old_foto = $subyek->foto;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $subyek->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {}
            }

            $subyek->foto = $filename;
            $subyek->save();
        }

        return redirect('subyek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kasus_id, $id)
    {
        Subyek::destroy($id);
        $kasus_subyek = KasusSubyek::where('kasus_id', $kasus_id)
            ->where('subyek_id', $id)
            ->first();

        if ($kasus_subyek) {
            $kasus_subyek_id = $kasus_subyek->id;
            if ($kasus_subyek_id) {
                KasusSubyek::destroy($kasus_subyek_id);
            }
        }

        return redirect('subyek');
    }

    public function tersangka($kasus_id)
    {
        $case = Kasus::select(['kasus.*','no_surat_perkara','tanggal_surat_perkara'])
            ->join('surats','kasus.id','=','surats.kasus_id')
            ->where('kasus.id', $kasus_id)
            ->where('surats.tipe_surat','=','RP3MUM')
            ->orderBy('surats.id', 'desc')
            ->first();

        $subyeks = Subyek::select(['subyek.*','subyek_id','kategori_subyeks.name'])
            ->join('kasus_subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kategori_subyeks','kategori_subyeks.id','=','subyek.kategori_subyek_id')
            ->where('kasus_subyek.kasus_id', $kasus_id)
            ->where('subyek.status', 1)
            ->get();
        
        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');
        
        return view('decay-case.subyek.subyek_tersangka_create', ['case' => $case, 'subyeks' => $subyeks, 'kategori_subyek' => $kategori_subyek, 'kasus_id' => $kasus_id]);
    }

    public function tahan($subyek_id)
    {
        $subyek = Subyek::select(['subyek.*','kategori_subyeks.name'])
            ->join('kategori_subyeks','kategori_subyeks.id','=','subyek.kategori_subyek_id')
            ->where('subyek.id', $subyek_id)
            ->first();

        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        $surat_dikmum = Subyek::select(['kasus.id as kasus_id','surats.id as surat_id','no_surat_perkara','kasus_posisi','tipe_surat'])
            ->join('kasus_subyek','subyek.id','=','kasus_subyek.subyek_id')
            ->join('kasus','kasus.id','=','kasus_subyek.kasus_id')
            ->join('surats','kasus.id','=','surats.kasus_id')
            ->where('subyek.id', $subyek_id)
            ->where('tipe_surat', 'RP3MUM')
            ->first();

        /*
        $spt_subyek = Spt::select(['spt.id as spt_id','no_spt','tanggal_spt'])
            ->join('spt_subyek','spt.id','=','spt_subyek.spt_id')
            ->join('subyek','subyek.id','=','spt_subyek.subyek_id')
            ->where('subyek.id', $subyek_id)
            ->where('jenis_spt', 'TAHANAN')
            ->first();

        if ($spt_subyek) {
            return view('decay-case.subyek.subyek_tahan_create', ['subyek' => $subyek, 'kategori_subyek' => $kategori_subyek, 'spt_id' => $spt_subyek->spt_id, 'no_spt' => $spt_subyek->no_spt, 'tanggal_spt' => $spt_subyek->tanggal_spt, 'surat_dikmum' => $surat_dikmum]);
        } else {
            return view('decay-case.subyek.subyek_tahan_create', ['subyek' => $subyek, 'kategori_subyek' => $kategori_subyek, 'spt_id' => '', 'no_spt' => '', 'tanggal_spt' => date('Y-m-d'), 'surat_dikmum' => $surat_dikmum]);
        }
        */

        return view('decay-case.subyek.subyek_tahan_create', ['subyek' => $subyek, 'kategori_subyek' => $kategori_subyek, 'spt_id' => '', 'no_spt' => '', 'tanggal_spt' => date('Y-m-d'), 'surat_dikmum' => $surat_dikmum]);
    }

    public function tahanupdate(Request $request, $id)
    {
        $this->validate($request, [
            'no_spt'      => 'required',
            'tanggal_spt' => 'required'
        ]);

        $ke = Carbon::createFromFormat('Y-m-d', $request->masa_hukuman_ke);
        $dari = Carbon::createFromFormat('Y-m-d', $request->masa_hukuman_dari);
        $masa_hukuman = $ke->diffInDays($dari);
        
        $subyek = Subyek::find($id);
        if ($subyek) {
            $subyek->update($request->all() + ['status' => Subyek::STATUS_TAHANAN, 'masa_hukuman' => $masa_hukuman]);    
        }

        $kasus_id = $request->kasus_id;
        $surat_id = $request->surat_id;
        $spt_id = $request->spt_id;
        if ($spt_id) {
            $spt = Spt::find($spt_id);
            if ($spt) {
                $spt->update($request->only('no_spt','tanggal_spt'));
            }
        } else {
            $spt = Spt::create($request->only('no_spt','tanggal_spt') + ['kasus_id' => $kasus_id, 'surat_id' => $surat_id, 'judul_spt' => 'SURAT PERINTAH PENAHANAN', 'jenis_spt' => 'TAHANAN']);
            $spt->subyeks()->attach($id);
        }

        return redirect('/subyek');
    }
}
