<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EnrollFormRequest;
use App\Http\Requests\LogMilesFormRequest;
use App\PlanDays;
use App\Helper\CommonUtilities;

class PlansController extends Controller {

	/**
	 * Opens the main page for plan types.
	 *
	 * @param string $type
	 * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|unknown
	 */
	public function showPlans($type = '') {
		if ($type == '' && Auth::check ()) {
			$type = Auth::user ()->plan_type;
		}

		if ($type == '') {
			return redirect ( '/' );
		}

		$plan = Plan::whereType ( $type )->first ();
		if (! $plan) {
			return redirect ( '/' );
		}

		$weeks = $plan->weeks ()->get ();
		foreach ( $weeks as $week ) {
			$week->days = $week->days ()->orderBy ( 'order', 'ASC' )->get ();

			// for each day, retrieve the logged miles for the user
			if (Auth::check ()) {
				foreach ( $week->days as $day ) {
					$day_num = CommonUtilities::weekDayToDayNumber ( $week->id, CommonUtilities::dayNameToCount ( $day->name ) );
					$user = Auth::user ();
					$plan_days = PlanDays::whereUserId ( $user->id )->first ();
					$day->logged = $plan_days->$day_num;
				}
			} // end for
		}

		$enrolled = false;
		if (Auth::check ()) {
			$enrolled = Auth::user ()->plan_type != '';
			$type = Auth::user ()->plan_type;
			$curr_plan = Plan::whereType ( $type )->first ();
		}

		return view ( 'plans.show', [
				'weeks' => $weeks,
				'enrolled' => $enrolled,
				'curr_plan' => $curr_plan,
				'plan' => $plan
		] );
	}

	/**
	 *
	 * @param string $week
	 * @param string $day
	 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
	 */
	public function showLogScreen($week = '', $day = '') {
		$plan = array ();
		if (Auth::check ()) {
			$type = Auth::user ()->plan_type;
			$plan = Plan::whereType ( $type )->first ();
		}
		return view ( 'plans.log', [
				'week' => $week,
				'day' => $day,
				'curr_plan' => $plan
		] );
	}

	/**
	 *
	 * @param EnrollFormRequest $request
	 */
	public function saveLoggedMiles(LogMilesFormRequest $request) {
		$user = Auth::user ();
		$plan_days = PlanDays::whereUserId ( $user->id )->first ();

		$day = CommonUtilities::weekDayToDayNumber ( $request->get ( 'week' ), $request->get ( 'day' ) );

		$plan_days->$day = $request->get ( 'miles' );
		$plan_days->save ();
		return redirect ( action ( 'PlansController@showPlans' ) )->with ( 'status', 'Your miles have been logged!' );
	}

	/**
	 * Opens a page that allows users to enroll in a plan.
	 *
	 * @param string $type
	 * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|unknown
	 */
	public function enroll($type = '') {
		$plan = array ();
		if (Auth::check ()) {
			$type = Auth::user ()->plan_type;
			$plan = Plan::whereType ( $type )->first ();
		}
		$plans = Plan::all ();
		return view ( 'plans.enroll', [
				'plans' => $plans,
				'type' => $type,
				'curr_plan' => $plan
		] );
	}

	/**
	 * Saves enrollment option.
	 *
	 * @param FormRequest $request
	 */
	public function saveEnrollment(EnrollFormRequest $request) {
		$user = Auth::user ();
		$user->plan_type = $request->get ( 'options' );
		$user->save ();
		return redirect ( action ( 'PlansController@showPlans' ) )->with ( 'status', 'You have been successully enrolled!' );
	}
}
