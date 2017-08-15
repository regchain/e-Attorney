<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jaksa;

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

    public function jaksas()
    {
        return $this->belongsToMany(Jaksa::class, 'surat_jaksa', 'surat_id', 'jaksa_id');
    }
}
