<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function contact()
	{
		return view('ban-banh.contact');
	}
	
	public function getIndex(){
		$slide= Slide::all();
		print_r('$slide');
		exit;
		return view('view.layout.front-end.master',compact('slide'));
	}
}