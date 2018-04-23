<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
    	$data['title']	= "Portofolio";

    	return view('portofolio',$data);
    }
}
