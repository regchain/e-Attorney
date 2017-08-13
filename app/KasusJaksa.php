<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KasusJaksa extends Model
{
    protected $table = 'kasus_jaksas';
    protected $fillable = [
        'kasus_id',
        'jaksa_id'
    ];

}
