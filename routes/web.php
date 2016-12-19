<?php

/**
 *
 * Register web routes for your application. These routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group.
 *
 * PHP version 7
 *
 * @author     Fumba Chibaka <fumba.me@gmail.com>
 *
 */
Route::get ( '/', 'PagesController@home' );
Route::get ( 'home', 'PagesController@home' );

Route::get ( 'users/register', 'Auth\RegisterController@showRegistrationForm' );
Route::post ( 'users/register', 'Auth\RegisterController@register' );
Route::get ( 'users/logout', 'Auth\LoginController@logout' );
Route::get ( 'users/login', 'Auth\LoginController@showLoginForm' );
Route::post ( 'users/login', 'Auth\LoginController@login' );

Route::get ( '/plan/{plan_type?}', 'PlansController@showPlans' );
Route::get ( '/plan/enroll/{plan_type?}', 'PlansController@enroll' );
Route::post ( '/plan/enroll/{plan_type?}', 'PlansController@saveEnrollment' );
Route::get ( '/plan/log/{week?}/{day?}', 'PlansController@showLogScreen' );
Route::post ( '/plan/log/{week?}/{day?}', 'PlansController@saveLoggedMiles' );


