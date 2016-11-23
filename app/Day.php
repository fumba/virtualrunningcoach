<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Week;

class Day extends Model {
	public function week() {
		return $this->belongsTo ( 'App\Week' );
	}
}
