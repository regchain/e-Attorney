<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratP15 extends Model
{
    protected $table = 'surat_p15';
    protected $fillable = [
        'surat_id',
        'judul_p15',
        'no_p15',
        'tanggal_p15',
        'jenis_p15'
    ];
}
