<?php

namespace App\Http\Controllers\Admin\Option;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portofolio;

class PortofolioController extends Controller
{
    public function index()
    {	
    	$data['result']	=	Portofolio::get();
    	return view('admin\option\portofolio\index',$data);
    }

    public function create()
    {
    	return view('admin\option\portofolio\create');
    }

    public function save(Request $request)
    {
    	$request->validate 
    	([
    		'nama'	=>	'required|min:5|',
    		'gambar'	=>	'required',
    		'isi'	=>	'required',
    		'tanggal'	=>	'required'
    	]);

        $gambar         =   $request->file('gambar')->store('public/gambars');
    	$portofolio 		=   new Portofolio;
    	$portofolio->nama 	=   $request->nama;
        $portofolio->isi  =   $request->isi;
        $portofolio->tanggal  =   $request->tanggal;
        $portofolio->gambar =   $gambar;
    	$portofolio->save();

    	return redirect()->route('admin.option.portofolio'); 
    }

    public function edit($id)
    {	
    	$data['row']	=	Portofolio::find($id);
    	return view('admin\option\portofolio\edit',$data);
    }

    public function update($id, Request $request)
    {
    	([
    		'nama'	=>	'required|min:5|',
    		'gambar'	=>	'required',
    		'isi'	=>	'required',
    		'tanggal'	=>	'required'
    	]);

        $gambar         =   $request->file('gambar')->store('public/gambars');
    	$portofolio 		=   Portofolio::find($id);
    	$portofolio->nama 	=   $request->nama;
        $portofolio->isi  =   $request->isi;
        $portofolio->tanggal  =   $request->tanggal;
        $portofolio->gambar =   $gambar;
    	$portofolio->save();

    	return redirect()->route('admin.option.portofolio'); 
    }

    public function delete($id)
    {
    	$portofolio 	=	Portofolio::find($id);
    	$portofolio->forceDelete();
    	echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
