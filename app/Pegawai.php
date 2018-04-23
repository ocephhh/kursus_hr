<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
     protected $table = "pegawai";

    protected $guarded = ['id'];

    public function divisi()
    {
    	return $this->belongsTo('App\Divisi','id_divisi');
    }
    public function jabatan()
    {
    	return $this->belongsTo('App\Jabatan','id_jabatan');
    }
}
