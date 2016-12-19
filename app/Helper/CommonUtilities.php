<?php

/**
 * Functions used to perform functionalities application-wide.
 *
 * PHP version 7
 *
 * @author     Fumba Chibaka <fumba.me@gmail.com>
 */
namespace App\Helper;

use Illuminate\Support\Facades\Auth;
use App\Plan;

class CommonUtilities {

	/**
	 * Get the current plan for the loggedin user.
	 */
	public static function getCurrentPlan() {
		$plan = array ();
		if (Auth::check ()) {
			$type = Auth::user ()->plan_type;
			$plan = Plan::whereType ( $type )->first ();
		}
		return $plan;
	}

	/**
	 * Check if the logged in user is enrolled in the specified plan type.
	 */
	public static function isEnrolled($plan_type) {
		if (Auth::check ()) {
			return Auth::user ()->plan_type == $plan_type;
		}
		return false;
	}

	/**
	 * Determine if the minimum distance has been logged.
	 */
	public static function hasMinDistLogged($plan_type, $logged, $required) {
		if (CommonUtilities::isEnrolled ( $plan_type ) && $logged >= $required) {
			return true;
		}
		return false;
	}

	/**
	 * Given the week and day of the week, this function computes the correspond day count.
	 *
	 * eg. Week 2 - Day 2 == Day Count 16.
	 *
	 * @return number
	 */
	public static function weekDayToDayNumber($week, $day) {
		$day_count = 0;
		if ($week > 1) {
			$day_count = $week * 7;
		}
		$day_count += $day;
		return 'day_' . $day_count;
	}

	/**
	 * Convert day name into day #.
	 *
	 * eg. Thursday = day #4.
	 */
	public static function dayNameToCount($day_name) {
		switch ($day_name) {
			case 'Monday' :
				return 1;
			case 'Tuesday' :
				return 2;
			case 'Wednesday' :
				return 3;
			case 'Thursday' :
				return 4;
			case 'Friday' :
				return 5;
			case 'Saturday' :
				return 6;
			case 'Sunday' :
				return 7;
			default :
				return - 1;
		}
	}
}