<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Obyek;
use App\Subyek;
use App\Jaksa;

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
        'status',
        'asal_surat',
        'no_surat',
        'tanggal_surat_pelapor',
        'tanggal_surat_diterima',
        'pembuat_catatan_surat',
        'tanggal_rp2',
        'no_surat_rp2',
    ];

    public function obyek()
    {
        return $this->hasOne(Obyek::class, 'kasus_id');
    }

    public function subyeks()
    {
        return $this->belongsToMany(Subyek::class, 'kasus_subyek', 'kasus_id', 'subyek_id');
    }

    public function obyeks()
    {
        return $this->belongsToMany(Obyek::class, 'kasus_obyek', 'kasus_id', 'obyek_id');
    }

    public function jaksas()
    {
        return $this->belongsToMany(Jaksa::class, 'kasus_jaksas', 'kasus_id', 'jaksa_id');
    }
}
