<?php

/**
 * Controller for main landing pages.
 *
 * PHP version 7
 *
 * @author     Fumba Chibaka <fumba.me@gmail.com>
 */
namespace App\Http\Controllers;

use App\Helper\CommonUtilities;
use App\Plan;

class PagesController extends Controller {

	// Home page
	public function home() {
		$plans = Plan::all ();
		$curr_plan = CommonUtilities::getCurrentPlan ();
		return view ( 'home', [
				'plans' => $plans,
				'curr_plan' => $curr_plan
		] );
	}
}
