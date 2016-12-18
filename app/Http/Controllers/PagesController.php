<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller {

	// Home page
	public function home() {
		$plan = array ();

		if (Auth::check ()) {
			$type = Auth::user ()->plan_type;
			$plan = Plan::whereType ( $type )->first ();
		}

		$plans = Plan::all ();
		return view ( 'home', [
				'plans' => $plans,
				'curr_plan' => $plan
		] );
	}
}
