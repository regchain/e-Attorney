<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangBukti extends Model
{
	protected $table = 'barang_bukti';
    protected $fillable = [
    	'surat_id', 
    	'obyek_id', 
    	'barang_sitaan', 
    	'nilai_pemulihan_aset'
    ];
}
