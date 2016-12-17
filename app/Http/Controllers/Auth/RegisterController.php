<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\PlanDays;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller {
	/*
	 * |--------------------------------------------------------------------------
	 * | Register Controller
	 * |--------------------------------------------------------------------------
	 * |
	 * | This controller handles the registration of new users as well as their
	 * | validation and creation. By default this controller uses a trait to
	 * | provide this functionality without requiring any additional code.
	 * |
	 */

	use RegistersUsers;

	/**
	 * Where to redirect users after login / registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware ( 'guest' );
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param array $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make ( $data, [
				'name' => 'required|max:255',
				'email' => 'required|email|max:255|unique:users',
				'password' => 'required|min:6|confirmed'
		] );
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param array $data
	 * @return User
	 */
	protected function create(array $data) {
		$user = User::create ( [
				'name' => $data ['name'],
				'email' => $data ['email'],
				'password' => bcrypt ( $data ['password'] )
		] );

		// Create new day count entry for new user
		PlanDays::create ( [
				'user_id' => $user->id
		] );

		$data = array (
				'email' => $user->email,
				'name' => $user->name
		);

		Mail::send ( 'emails.newuser', $data, function ($message) {
			$message->from ( 'fumba@chibaka.com', 'New User Created' );
			$message->to ( 'fumba.me@gmail.com' )->subject ( 'New User has been created!' );
		} );

		return $user;
	}
}
