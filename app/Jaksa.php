<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaksa extends Model
{
    protected $fillable = ['nip', 'nama_jaksa', 'pangkat', 'telepon'];
}
