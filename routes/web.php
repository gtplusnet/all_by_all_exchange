<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 					'MainController@index');
Route::any('/login', 				'LoginController@login');
Route::any('/registration', 		'RegistrationController@registration');
Route::any('/success', 		    	'RegistrationController@thank_you');
Route::any('/dashboard', 			'MainController@dashboard');
Route::any('/cash_in', 				'MainController@cash_in');
Route::any('/cash_out', 			'MainController@cash_out');
Route::any('/notification', 		'MainController@notification');