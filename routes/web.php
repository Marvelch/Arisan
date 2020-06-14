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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/xcgroup', 'GroupController@index')->name('xcgroup');
Route::post('/xcgroup/xcpost', 'GroupController@store');

Route::get('xcmember','MemberController@index');
Route::post('xcmember/xcinsert','MemberController@insert')->name('xcmember.insert');

Route::get('xcarisan','ArisanController@index')->name('dashboard');
Route::get('xcsubarisan/{id}','ArisanController@subarisan');

Route::get('xcprofile','ArisanController@profile')->name('profile');
Route::get('xceditprofile','ArisanController@editprofile');
Route::post('processupdate','ArisanController@updateprofile')->name('processupdate');

Route::get('peserta','ArisanController@Membersdata');
// Route::post('processupdate','ArisanController@proses_update_profile')->name('processupdate');

Route::get('xcwinner','WinnerController@index')->name('xcwinner');

Route::get('dynamic-field', 'MemberController@utama');
Route::post('dynamic-field/insert', 'MemberController@subinsert')->name('dynamic-field.insert');