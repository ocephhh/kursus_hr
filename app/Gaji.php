<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $table = "master_gaji";

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
