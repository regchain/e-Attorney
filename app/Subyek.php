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
        'nama_terlapor',
        'tempat_tinggal',
        'jenis_kelamin',
        'pendidikan',
        'tempat_lahir',
        'tanggal_lahir',
        'kewarganegaraan',
        'agama',
        'pekerjaan',
        'lembaga',
        'jabatan_resmi',
        'jabatan_lain',        
        'kategori_subyek_id',
        'status',
        'masa_hukuman',
        'masa_hukuman_dari',
        'masa_hukuman_ke'
    ];

}
