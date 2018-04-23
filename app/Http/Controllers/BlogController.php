<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {	
    	$data['title']	= "Blog";

    	return view('blog',$data);
    }
}
