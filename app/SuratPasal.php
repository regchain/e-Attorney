<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratPasal extends Model
{
    protected $table = 'surat_pasal';
    protected $fillable = [
        'surat_id',
        'pasal_id'
    ];
}
