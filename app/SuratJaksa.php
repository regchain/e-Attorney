<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratJaksa extends Model
{
    protected $table = 'surat_jaksa';
    protected $fillable = [
        'surat_id',
        'jaksa_id'
    ];
}
