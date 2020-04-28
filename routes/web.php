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

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'middleware'    => ['web', 'auth'],
], function () {

    Route::group([
        // 'middleware'    => ['role:admin'],
        'as'            => 'user::',
        'prefix'        => 'user',
        'namespace'     => 'User'
    ], function () {
        Route::resource('user', 'UserController');
    });

    // Route::resource('kpi', 'KpiController');
    Route::resource('dosen', 'DosenController');
    Route::resource('bobotsaw', 'BobotSawController');
    Route::resource('perangkingansaw', 'PerangkinganSawController');
    Route::resource('bobotahp', 'BobotAhpController');
    Route::resource('perankinganahp', 'PerankinganAhpController');
});
