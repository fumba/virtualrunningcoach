<?php
/**
 *PlanDays Model.
 *
 * PHP version 7
 *
 * @author     Fumba Chibaka <fumba.me@gmail.com>
 * */
namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanDays extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'user_id'
	];
}
