<?php

/**
 * Controller for all dashboard pages.
 *
 * PHP version 7
 *
 * @author     Fumba Chibaka <fumba.me@gmail.com>
 */
namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EnrollFormRequest;
use App\Http\Requests\LogMilesFormRequest;
use App\PlanDays;
use App\Helper\CommonUtilities;
use DateTime;

class PlansController extends Controller {

	/**
	 * Retrieves plan info and displays the main page for plan types.
	 *
	 * @param string $plan_type
	 *        	- type of plan
	 * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|unknown
	 */
	public function showPlans($plan_type = '') {
		if ($plan_type == '' && Auth::check ()) {
			$plan_type = Auth::user ()->plan_type;
		}
		// redirect back to main page if plan is not specified in request
		if ($plan_type == '') {
			return redirect ( '/' );
		}
		// redirect back to main page if the specified plan does not exist
		$plan = Plan::whereType ( $plan_type )->first ();
		if (! $plan) {
			return redirect ( '/' );
		}

		$weeks = $plan->weeks ()->get ();
		foreach ( $weeks as $week ) {
			$week->days = $week->days ()->get ();

			// for each day, retrieve the logged miles for the user
			if (Auth::check ()) {
				foreach ( $week->days as $day ) {
					$day_num = 'day_' . CommonUtilities::weekDayToDayNumber ( $week->order, CommonUtilities::dayNameToCount ( $day->name ) );
					$user = Auth::user ();
					$plan_days = PlanDays::whereUserId ( $user->id )->first ();
					$day->logged = $plan_days->$day_num;
					$day->status = CommonUtilities::hasMinDistLogged ( $plan_type, $day->logged, $day->distance );
					$day->count = CommonUtilities::dayNameToCount ( $day->name );

					// mark the current week and day for the logged in user
					$week->current = CommonUtilities::isCurrentWeek ( $week->order, $day->name );
					$day->current = CommonUtilities::isCurrentDay ( $week->order, $day->name );
				}
			} else {
				// for non-logged in users, the first week will always be marked as current
				$weeks [0]->current = true;
			}
		}

		$enrolled = CommonUtilities::isEnrolled ( $plan_type );
		$curr_plan = CommonUtilities::getCurrentPlan ();
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
		$curr_plan = CommonUtilities::getCurrentPlan ();
		return view ( 'plans.log', [
				'week' => $week,
				'day' => $day,
				'curr_plan' => $curr_plan
		] );
	}

	/**
	 *
	 * @param EnrollFormRequest $request
	 */
	public function saveLoggedMiles(LogMilesFormRequest $request) {
		$user = Auth::user ();
		$plan_days = PlanDays::whereUserId ( $user->id )->first ();

		$day = 'day_' . CommonUtilities::weekDayToDayNumber ( $request->get ( 'week' ), $request->get ( 'day' ) );

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
		$curr_plan = CommonUtilities::getCurrentPlan ();
		$plans = Plan::all ();
		return view ( 'plans.enroll', [
				'plans' => $plans,
				'type' => $type,
				'curr_plan' => $curr_plan
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
		$user->plan_start_dt = new DateTime ();
		$user->save ();
		return redirect ( action ( 'PlansController@showPlans' ) )->with ( 'status', 'You have been successully enrolled!' );
	}
}
