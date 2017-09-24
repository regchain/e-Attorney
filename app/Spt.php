<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spt extends Model
{
    protected $table = 'spt';
    protected $fillable = [
    	'kasus_id',
        'surat_id',
    	'judul_spt',
        'no_spt',
        'tanggal_spt',
        'jenis_spt'
    ];

    public function subyeks()
    {
        return $this->belongsToMany(Subyek::class, 'spt_subyek', 'spt_id', 'subyek_id');
    }
}
