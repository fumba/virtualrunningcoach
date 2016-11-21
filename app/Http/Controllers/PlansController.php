<?php

namespace App\Http\Controllers;

use App\Plan;

class PlansController extends Controller {
	public function show($type) {
		$plan = Plan::whereType ( $type )->firstOrFail ();
		$weeks = $plan->weeks() -> get();
		return view ( 'plans.show', [  'weeks'=> $weeks , 'type' => $type] );
	}
}
