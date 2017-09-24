<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KasusObyek extends Model
{
    protected $table = 'kasus_obyek';
    protected $fillable = [
        'kasus_id',
        'obyek_id'
    ];

}
