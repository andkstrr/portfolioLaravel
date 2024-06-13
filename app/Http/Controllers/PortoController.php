<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function home(){
		return view('home');
	}

	public function projects(){
		return view('projects');
	}

	public function contact(){
		return view('contact');
	}
}
