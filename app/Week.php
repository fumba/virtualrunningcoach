<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Plan;

class Week extends Model {

	protected $guarded = ['id'];

	public function plan() {
		return $this->belongsTo ( 'App\Plan' );
	}
}
