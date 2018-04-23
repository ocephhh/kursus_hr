<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoerignRelasiGajiPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relasi_gaji_pegawai', function (Blueprint $table){
            // $table->integer('id_pegawai')->unsigned()->change();
            // $table->foreign('id_pegawai')
            //     ->references('id')
            //     ->on('pegawai');

            $table->integer('id_jabatan')->unsigned()->change();
            $table->foreign('id_jabatan')
                ->references('id')
                ->on('jabatan');    

            $table->integer('id_divisi')->unsigned()->change();
            $table->foreign('id_divisi')
                ->references('id')
                ->on('divisi');         
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
