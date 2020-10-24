<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAll(){
    	$artikels = Artikel::all();
    	return view('bshome', ['artikels'=> $artikels]);

    }
    public function homeboot(){
    	return view('bootstrap.home');
    }
    public function index()
    {
        return view('Home');
    }
}
