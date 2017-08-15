<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jaksa;
use App\Obyek;

class Surat extends Model
{
	protected $table = 'surats';
    protected $fillable = [
    	'judul_surat', 
    	'no_surat_perkara', 
    	'tanggal_surat_perkara',
    	'tanggal_mulai',
    	'tanggal_berhenti',
        'tindakan',
        'keterangan',
    	'tipe_surat',
        'kasus_id'
    ];

    public function jaksas()
    {
        return $this->belongsToMany(Jaksa::class, 'surat_jaksa', 'surat_id', 'jaksa_id');
    }

    public function obyeks()
    {
        return $this->belongsToMany(Obyek::class, 'surat_obyek', 'surat_id', 'obyek_id');
    }
}
