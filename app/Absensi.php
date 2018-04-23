<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = "absensi";

    protected $guarded = ['id'];

    public function pegawai()
    {
    	return $this->belongsTo('App\Pegawai','id_pegawai');
    }
}
