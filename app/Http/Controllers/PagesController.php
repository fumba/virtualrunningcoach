<?php

namespace App\Http\Controllers;

use App\Plan;

class PagesController extends Controller {

	// Home page
	public function home() {
		$plans = Plan::all ();
		return view ( 'home', [
				'plans' => $plans
		] );
	}

	// About page
	public function about() {
		return view ( 'about' );
	}

	// Contact page
	public function contact() {
		return view ( 'tickets.create' );
	}
}
