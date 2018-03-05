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
Route::get('/member/dashboard/aba_walletaddress', 		'MemberDashboardController@aba_wall_add');
Route::get('/member/dashboard/btc_walletaddress', 		'MemberDashboardController@btc_wall_add');
Route::get('/member/dashboard/aba_to_btc_conv', 		'MemberDashboardController@aba_to_btc_conv');
Route::get('/member/dashboard/aba_to_peso_conv', 		'MemberDashboardController@aba_to_peso_conv');
Route::get('/member/dashboard/btc_to_aba_conv', 		'MemberDashboardController@btc_to_aba_conv');
Route::get('/member/dashboard/peso_to_aba_conv', 		'MemberDashboardController@peso_to_aba_conv');
Route::get('/member/dashboard/send_money_step_1', 		'MemberDashboardController@send_money_step_1');
Route::get('/member/dashboard/send_money_step_2', 		'MemberDashboardController@send_money_step_2');
Route::get('/member/dashboard/send_money_step_3', 		'MemberDashboardController@send_money_step_3');
Route::get('/member/dashboard/cashin_mark_as_paid', 		'MemberDashboardController@cashin_mark_as_paid');
Route::get('/member/dashboard/cashout_complete_payment', 		'MemberDashboardController@cashout_complete_payment');