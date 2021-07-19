<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();
Auth::routes(['register' => false]);
Route::group(['middleware' => 'auth'], function () {

    // GLS-sender
    Route::get('sender', function () {
		return view('pages.senders.index');
	})->name('sender');

    // GLS-receive
    Route::get('receiver', function () {
		return view('pages.receivers.index');
	})->name('receiver');

    // GLS-receive
    Route::get('setting', function () {
		return view('pages.settings.index');
	})->name('setting');

    // GLS-printer
    Route::get('printer', function () {
		return view('pages.printers.index');
	})->name('printer');

});


