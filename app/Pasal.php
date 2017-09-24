<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasal extends Model
{
    protected $fillable = ['undang_undang', 'pasal', 'ayat', 'huruf', 'keterangan', 'masa_hukuman_min', 'masa_hukuman_max', 'denda_min', 'denda_max', 'kategori_pasal'];

    public function getFullNameAttribute()
	{
	    return $this->pasal . ' Ayat ' . $this->ayat . ' Huruf ' . $this->huruf;
	}
}
