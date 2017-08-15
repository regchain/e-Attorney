<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Obyek;
use App\Subyek;
use App\Jaksa;
use App\Surat;

class Kasus extends Model
{
    const STATUS_BARU = 1; // muncul di RP1 
    const STATUS_DIALIHKAN = 2; // arsip, harus isi disposisi 
    const STATUS_DITERUSKAN = 3; // default, muncul selain dari RP1 
    const STATUS_DIHENTIKAN = 4; // arsip, harus isi disposisi 
    
    protected $table = 'kasus';

    protected $fillable = [
        'judul_kasus',
        'lokasi_kejadian',
        'tanggal_kejadian',
        'nama_lengkap',
        'alamat',
        'kota',
        'propinsi',
        'kontak_telpon',
        'kontak_handphone',
        'kontak_email',
        'kodepos',
        'disposisi',
        'kasus_posisi',
        'kasimpulan',
        'saran',
        'asal_surat',
        'no_surat',
        'tanggal_surat_pelapor',
        'tanggal_surat_diterima',
        'pembuat_catatan_surat',
        'status_rp1',
        'status_rp2',
        'status_rp3mum',
        'status_rp3sus',
    ];

    public function subyeks()
    {
        return $this->belongsToMany(Subyek::class, 'kasus_subyek', 'kasus_id', 'subyek_id');
    }

    public function obyeks()
    {
        return $this->belongsToMany(Obyek::class, 'kasus_obyek', 'kasus_id', 'obyek_id');
    }

    public function surat()
    {
        return $this->hasMany(Surat::class, 'kasus_id');
    }
}
