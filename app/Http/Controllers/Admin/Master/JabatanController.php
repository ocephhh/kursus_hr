<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jabatan;

class JabatanController extends Controller
{
   public function index()
    {
        $data['result']     = Jabatan::get();
    	return view('admin/master/jabatan/index',$data);
    }

    public function create()
    {
    	return view('admin/master/jabatan/create');
    }

    public function save(Request $request)
    {
    	$request->validate
        ([
    	
        	'nama' => 'required|min:3|unique:jabatan,nama_jabatan',
    		
		]);

        $jabatan                 = new Jabatan;
        $jabatan->nama_jabatan    = $request->nama;
        $jabatan->save();

        return redirect()->route('admin.master.jabatan');
    }

    public function edit($id)
    {   
        $data['row']    =   Jabatan::find($id);
        return view('admin/master/jabatan/edit',$data);
    }

    public function update($id, Request $request)
    {
        $request->validate
        ([
        
            'nama' => 'required|min:3',
            
        ]);

        $jabatan         = Jabatan::find($id);
        $jabatan->nama_jabatan    = $request->nama;
        $jabatan->save();

        return redirect()->route('admin.master.jabatan');
    }

    public function delete($id)
    {   
        $jabatan = Jabatan::find($id);
        $jabatan->forceDelete();
        echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
