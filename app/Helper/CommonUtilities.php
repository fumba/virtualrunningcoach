<?php

namespace App\Helper;

class CommonUtilities {

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