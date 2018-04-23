<?php

namespace App\Http\Controllers\Admin\Option;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;

class SliderController extends Controller
{
    public function index()
    {	
    	$data['result']	=	Slider::get();
    	return view('admin\option\slider\index',$data);
    }

    public function create()
    {
    	return view('admin\option\slider\create');
    }

    public function save(Request $request)
    {
    	$request->validate 
    	([
    		'nama'	=>	'required|min:5|', //nama yang diseblah kiri sama yang kaya di FORM! 
    		'gambar'	=>	'required',
    		'vidio'	=>	'required'
    	]);

        $gambar         =   $request->file('gambar')->store('public/gambars');
    	$slider 		=   new Slider;
    	$slider->nama 	=   $request->nama; //->nama dan lain lain sama seperti yang di database
        $slider->vidio  =   $request->vidio;
        $slider->gambar =   $gambar;
    	$slider->save();

    	return redirect()->route('admin.option.slider'); 
    }

    public function edit($id)
    {	
    	$data['row']	=	Slider::find($id);
    	return view('admin\option\slider\edit',$data);
    }

    public function update($id, Request $request)
    {
    	([
    		'nama'	=>	'required|min:5|',
    		'gambar'	=>	'required',
    		'vidio'	=>	''
    	]);

        $gambar         =   $request->file('gambar')->store('public/gambars');
    	$slider 		=   Slider::find($id);
    	$slider->nama 	=   $request->nama;
        $slider->vidio  =   $request->vidio;
        $slider->gambar =   $gambar;
    	$slider->save();

    	return redirect()->route('admin.option.slider'); 
    }

    public function delete($id)
    {
    	$slider 	=	Slider::find($id);
    	$slider->forceDelete();
    	echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
