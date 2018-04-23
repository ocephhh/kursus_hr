<?php

namespace App\Http\Controllers\Admin\Option;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
     public function index()
    {	
    	$data['result']	=	Contact::get();
    	return view('admin\option\contact\index',$data);
    }

    public function create()
    {
    	return view('admin\option\contact\create');
    }

    public function save(Request $request)
    {
    	$request->validate 
    	([
    		'nama'		=>	'required|min:3|',
    		'telepon'	=>	'required',
            'email'     =>  'required',
            'judul'     =>  'required',
    		'pesan'		=>	'required'
    	]);

        
    	$contact 		      =   new Contact;
    	$contact->nama 	      =   $request->nama;
        $contact->telepon     =   $request->telepon;
        $contact->email       =   $request->email;           
        $contact->judul       =   $request->judul;           
        $contact->pesan       =   $request->pesan;           
    	$contact->save();

    	return redirect()->route('admin.option.contact'); 
    }

    public function edit($id)
    {	
    	$data['row']	=	Contact::find($id);
    	return view('admin\option\contact\edit',$data);
    }

    public function update($id, Request $request)
    {
    	([
    		'nama'          =>  'required|min:3|',
            'telepon'       =>  'required',
            'email'         =>  'required',
            'judul'         =>  'required',
            'pesan'         =>  'required'
    	]);

    	$contact 		      =   Contact::find($id);
    	$contact->nama 	      =   $request->nama;
        $contact->telepon     =   $request->telepon;
        $contact->email       =   $request->email;
        $contact->judul       =   $request->judul;          
        $contact->pesan       =   $request->pesan;
    	$contact->save();

    	return redirect()->route('admin.option.contact'); 
    }

    public function delete($id)
    {
    	$contact 	=	Contact::find($id);
    	$contact->forceDelete();
    	echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
	}
}
