<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaksa extends Model
{
	protected $table = 'surats';
    protected $fillable = [
    	'judul_surat', 
    	'no_surat', 
    	'tanggal_surat',
    	'tanggal_mulai',
    	'tanggal_berhenti',
    	'tipe_surat',
        'kasus_id'
    ];
}
