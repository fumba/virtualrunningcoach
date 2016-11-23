<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Plan;
use App\Day;

class Week extends Model {
	protected $guarded = [
			'id'
	];

	var $days;

	public function __construct() {
	}

	// Get the days of the week
	public function days() {
		return $this->hasMany ( 'App\Day', 'week_id' );
	}
	public function plan() {
		return $this->belongsTo ( 'App\Plan' );
	}
}
