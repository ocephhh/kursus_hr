<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Absensi;
use App\Pegawai;

class AbsensiController extends Controller
{
     public function index()
    {
        $data['result']     = Absensi::get();
    	return view('admin/absensi/index',$data);
    }

    public function create()
    {	
    	$data ['pegawai']    =   Pegawai::get();
    	return view('admin/absensi/create',$data);
    }

    public function save(Request $request)
    {
    	$request->validate
        ([
    	
        	'id_pegawai' 		=> 'required',
            'bulan' 			=> 'required|min:3',
            'tahun' 			=> 'required|numeric',
            'jumlah_masuk' 		=> 'required|numeric',
            'jumlah_izin' 		=> 'required|numeric'
            
    		
		]);

        $absensi                 			= new Absensi;
        $absensi->id_pegawai    			= $request->id_pegawai;
        $absensi->bulan                     = $request->bulan;
        $absensi->tahun                		= $request->tahun;
        $absensi->jumlah_masuk              = $request->jumlah_masuk;
        $absensi->jumlah_izin               = $request->jumlah_izin;
        $absensi->save();

        return redirect()->route('admin.absensi');
    }

    public function edit($id)
    {   
    	$data['pegawai'] = Pegawai::get();
        $data['row']    =   Absensi::find($id);
        return view('admin/absensi/edit',$data);
    }

    public function update($id, Request $request)
    {
        $request->validate
        ([
        
            'id_pegawai' 		=> 'required',
            'bulan' 			=> 'required|min:3',
            'tahun' 			=> 'required|numeric',
            'jumlah_masuk' 		=> 'required|numeric',
            'jumlah_izin' 		=> 'required|numeric'
            
        ]);

        $absensi                 			= Absensi::find($id);
        $absensi->id_pegawai    			= $request->id_pegawai;
        $absensi->bulan                     = $request->bulan;
        $absensi->tahun                		= $request->tahun;
        $absensi->jumlah_masuk              = $request->jumlah_masuk;
        $absensi->jumlah_izin               = $request->jumlah_izin;
        $absensi->save();

        return redirect()->route('admin.absensi');
    }

    public function delete($id)
    {   
        $absensi = Absensi::find($id);
        $absensi->forceDelete();
        echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
