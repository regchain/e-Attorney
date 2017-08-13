<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
	protected $table = 'surats';
    protected $fillable = [
    	'judul_surat', 
    	'no_surat_perkara', 
    	'tanggal_surat_perkara',
    	'tanggal_mulai',
    	'tanggal_berhenti',
    	'tipe_surat',
        'kasus_id'
    ];
}
