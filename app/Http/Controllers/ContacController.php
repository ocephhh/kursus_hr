<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContacController extends Controller
{
    public function index()
    {	
    	$data['title']	= "Contact";

    	return view('contact',$data);
    }
}
