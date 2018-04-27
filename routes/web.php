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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile', 'UserController@index')->name('profile');

Route::get('/participation-in-events', 'ParticipationInEventsController@index')->name('ParticipationInEvents');

Route::get('/notifications', 'HomeController@index')->name('notifications');
Route::get('/bind/telegram', 'TelegramController@bind')->name('TelegramBind');

Route::get('/bind/email', 'EmailNotifiesController@bind')->name('EmailBind');
Route::get('/bind/email/remove', 'EmailNotifiesController@removeBind')->name('EmailBind');


Route::get('/dispatch/new', 'DispatchController@index')->name('dispatch');

Route::get('/setlocale/{locale}', function ($locale) {
	if (in_array($locale, \Config::get('app.locales'))) {
		Session::put('locale', $locale);
	}
	return redirect()->back();
});
