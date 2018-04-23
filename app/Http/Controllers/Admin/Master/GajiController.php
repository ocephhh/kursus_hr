<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gaji;
use App\Divisi;
use App\Jabatan;

class GajiController extends Controller
{
    public function index()
    {
        $data['result']     = Gaji::get();
    	return view('admin/master/gaji/index',$data);
    }

    public function create()
    {	
    	$data ['divisi']	=	Divisi::get();
    	$data ['jabatan']	=	Jabatan::get();
    	return view('admin/master/gaji/create',$data);
    }

    public function save(Request $request)
    {
    	//die();
    	$request->validate
        ([
    	
            
            'id_divisi' => 'required|exists:divisi,id',
            'id_jabatan' => 'required|exists:jabatan,id',
        	'gaji' => 'required|numeric'
    		
		]);

        $gaji                	= new Gaji;
        $gaji->id_jabatan       = $request->id_jabatan;
        $gaji->id_divisi        = $request->id_divisi;
        $gaji->gaji    			= $request->gaji;
        $gaji->save();

        return redirect()->route('admin.master.gaji');
    }
    public function edit($id)
    {   
        $data ['divisi']    =   Divisi::get();
        $data ['jabatan']   =   Jabatan::get();
        $data['row']    =   Gaji::find($id);
        return view('admin/master/gaji/edit',$data);
    }

    public function update($id,Request $request)
    {

        // print_r($_POST);die();
        $request->validate
        ([
        
            'id_divisi' => 'required|exists:divisi,id',
            'id_jabatan' => 'required|exists:jabatan,id',
            'gaji' => 'required|numeric'
            
        ]);

        $gaji                                   = Gaji::find($id);
        $gaji->id_jabatan                       = $request->id_jabatan;
        $gaji->id_divisi                        = $request->id_divisi;
        $gaji->gaji                             = $request->gaji;
        $gaji->save();

        return redirect()->route('admin.master.gaji');
    }

    public function delete($id)
    {   
        $gaji = Gaji::find($id);
        $gaji->forceDelete();
        echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
