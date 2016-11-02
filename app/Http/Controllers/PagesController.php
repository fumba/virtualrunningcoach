<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	
	//Home page
	public function home()
	{
		return view('home');
	}
	
	//About page
	public function about()
	{
		return view('about');
	}

	//Contact page
	public function contact()
	{
		return view('contact');
	}
}
