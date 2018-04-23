<?php

namespace App\Http\Controllers\Admin\Option;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {	
    	$data['result']	=	Blog::get();
    	return view('admin\option\blog\index',$data);
    }

    public function create()
    {
    	return view('admin\option\blog\create');
    }

    public function save(Request $request)
    {
    	$request->validate 
    	([
    		'judul'		=>	'required|min:5|',
    		'gambar'	=>	'required',
    		'isi'		=>	'required',
    		'tanggal'	=>	'required'
    	]);

        $gambar         =   $request->file('gambar')->store('public/gambars');
    	$blog 			=   new Blog;
    	$blog->judul 	=   $request->judul;
        $blog->isi  	=   $request->isi;
        $blog->tanggal	=	$request->tanggal;
        $blog->gambar 	=   $gambar;
    	$blog->save();

    	return redirect()->route('admin.option.blog'); 
    }

    public function edit($id)
    {	
    	$data['row']	=	Blog::find($id);
    	return view('admin\option\blog\edit',$data);
    }

    public function update($id, Request $request)
    {
    	([
    		'judul'		=>	'required|min:5|',
    		'gambar'	=>	'required',
    		'isi'		=>	'required',
    		'tanggal'	=>	'required'
    	]);

    	$gambar         =   $request->file('gambar')->store('public/gambars');
    	$blog 			=   Blog::find($id);
    	$blog->judul 	=   $request->judul;
        $blog->isi  	=   $request->isi;
        $blog->tanggal	=	$request->tanggal;
        $blog->gambar 	=   $gambar;
    	$blog->save();

    	return redirect()->route('admin.option.blog'); 
    }

    public function delete($id)
    {
    	$blog 	=	Blog::find($id);
    	$blog->forceDelete();
    	echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
