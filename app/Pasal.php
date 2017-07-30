<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasal extends Model
{
    protected $fillable = ['undang_undang', 'pasal', 'ayat', 'keterangan', 'masa_hukuman'];
}
