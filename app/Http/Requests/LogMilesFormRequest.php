<?php

/**
 *Form Request for updating completed miles for the particular day.
 *
 * PHP version 7
 *
 * @author     Fumba Chibaka <fumba.me@gmail.com>
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogMilesFormRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [ ];
		//

	}
}
