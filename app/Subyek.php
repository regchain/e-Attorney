<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subyek extends Model
{
    const STATUS_TERLAPOR = 1;
    const STATUS_TERSANGKA = 2;
    const STATUS_TAHANAN = 3;

    protected $table = 'subyek';
    protected $fillable = [
        'judul_surat',
        'nama_terlapor',
        'tempat_lahir',
        'kebangsaan',
        'kewarganegaraan',
        'tempat_tinggal',
        'agama',
        'jabatan_resmi',
        'jabatan_lain',
        'lembaga',
        'pendidikan',
        'kategori_subyek',
        'keterangan',
        'status',
        'no_surat_rp2',
        'tanggal_rp2'
    ];

}
