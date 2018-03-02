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
	
Route::get('/', 						'MainController@index');
Route::any('/member/login', 			'MemberLoginController@login');
Route::any('/member/register', 			'MemberRegisterController@register');
Route::any('/member/dashboard', 		'MemberDashboardController@index');
Route::any('/member/cash_in', 			'MemberCashInController@index');
Route::any('/member/cash_out', 			'MemberCashOutController@index');
Route::any('/member/notification', 		'MemberNotificationController@index');


//POPUPS
Route::get('/member/dashboard/peso_walletaddress', 		'MemberDashboardController@peso_wall_add');