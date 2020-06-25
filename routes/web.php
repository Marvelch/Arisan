<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/donation', 'HomeController@donasi')->name('donation');

Route::get('/group', 'GroupController@index')->name('group');
Route::post('/group/post', 'GroupController@store');

Route::get('members','MemberController@index');
Route::post('members/insert','MemberController@insert')->name('members.insert');

Route::get('dashboard','ArisanController@index')->name('dashboard');
Route::get('view/{id}/group_','ArisanController@subarisan');

Route::get('profile','ArisanController@profile')->name('profile');
Route::get('profile_edit','ArisanController@editprofile')->name('profile_edit');
Route::post('processupdate','ArisanController@updateprofile')->name('processupdate');

Route::get('peserta','ArisanController@Membersdata');
Route::get('contact','ArisanController@contact')->name('contact');
// Route::post('processupdate','ArisanController@proses_update_profile')->name('processupdate');

Route::get('winner','WinnerController@index')->name('winner');

Route::get('dynamic-field', 'MemberController@utama');
Route::post('dynamic-field/insert', 'MemberController@subinsert')->name('dynamic-field.insert');

Route::get('page_lost','HomeController@page_error');