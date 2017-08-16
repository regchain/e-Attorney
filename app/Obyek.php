<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obyek extends Model
{
    protected $table = 'obyek';
    protected $fillable = [
        'nilai_kontrak',
        'kerugian_negara',
        'pemulihan_aset',
        'obyek_pidana'
    ];
}
