<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Divisi;

class DivisiController extends Controller
{
    public function index()
    {
        $data['result']     = Divisi::get();
    	return view('admin/master/divisi/index',$data);
    }

    public function create()
    {
    	return view('admin/master/divisi/create');
    }

    public function save(Request $request)
    {
    	$request->validate
        ([
    	
        	'nama' => 'required|min:3|unique:divisi,nama_divisi',
    		
		]);

        $divisi                 = new Divisi;
        $divisi->nama_divisi    = $request->nama;
        $divisi->save();

        return redirect()->route('admin.master.divisi');
    }

    public function edit($id)
    {   
        $data['row']    =   Divisi::find($id);
        return view('admin/master/divisi/edit',$data);
    }

    public function update($id, Request $request)
    {
        $request->validate
        ([
        
            'nama' => 'required|min:3',
            
        ]);

        $divisi         = Divisi::find($id);
        $divisi->nama_divisi    = $request->nama;
        $divisi->save();

        return redirect()->route('admin.master.divisi');
    }

    public function delete($id)
    {   
        $divisi = Divisi::find($id);
        $divisi->forceDelete();
        echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
