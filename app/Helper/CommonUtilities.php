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
use DateTime;
use DateInterval;
use DateTimeZone;

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
	 * Determine if this is the current week for the program in which the user enrolled in.
	 *
	 * @return boolean
	 */
	public static function isCurrentWeek($week_order_num, $day_name) {
		return CommonUtilities::isCurrentDayOrWeek ( $week_order_num, $day_name, 7 );
	}

	/**
	 * Determine if this the current day for the program in which the user enrolled in.
	 *
	 * @return boolean
	 */
	public static function isCurrentDay($week_order_num, $day_name) {
		return CommonUtilities::isCurrentDayOrWeek ( $week_order_num, $day_name, 0 );
	}

	/**
	 * Helper function for isCurrentWeek and isCurrentDay
	 *
	 * @param unknown $week_order_num
	 * @param unknown $day_name
	 * @param unknown $factor
	 * @return boolean
	 */
	private static function isCurrentDayOrWeek($week_order_num, $day_name, $factor) {
		$now = (new DateTime ( "now", new DateTimeZone ( 'America/New_York' ) ))->setTime ( 0, 0, 0 );
		$date = (new DateTime ( Auth::user ()->plan_start_dt, new DateTimeZone ( 'America/New_York' ) ))->setTime ( 0, 0, 0 );
		for($i = 0; $i < CommonUtilities::weekDayToDayNumber ( $week_order_num, CommonUtilities::dayNameToCount ( $day_name ) ) - 1; $i ++) {
			$date->add ( new DateInterval ( 'P1D' ) );
		}
		// day calculation
		if ($factor == 0 && ($date->diff ( $now )->days == $factor)) {
			return true;
		}
		// week calculation
		if ($factor == 7 && ($date->diff ( $now )->days <= $factor)) {
			return true;
		}
		return false;
	}

	/**
	 *
	 * @param unknown $week_order_num
	 * @param unknown $day_name
	 * @param unknown $factor
	 * @return unknown
	 */
	public static function getActualDayForRegisteredUser($week_order_num, $day_name) {
		$date = (new DateTime ( Auth::user ()->plan_start_dt ))->setTime ( 0, 0, 0 );
		for($i = 0; $i < CommonUtilities::weekDayToDayNumber ( $week_order_num, CommonUtilities::dayNameToCount ( $day_name ) ) - 1; $i ++) {
			$date->add ( new DateInterval ( 'P1D' ) );
		}
		return $date->format ( 'D, M jS' );
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
		return (($week - 1) * 7) + $day;
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