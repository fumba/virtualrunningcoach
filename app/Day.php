<?php

/**
 *Day Model.
 *
 * PHP version 7
 *
 * @author     Fumba Chibaka <fumba.me@gmail.com>
 * */
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Week;

class Day extends Model {

	/** 
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function week() {
		return $this->belongsTo ( 'App\Week' );
	}
}
