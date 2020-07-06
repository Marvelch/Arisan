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


Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();
    
    Auth::routes(['verify' => true]);

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/donation', 'HomeController@donasi')->name('donation')->middleware('auth');

    Route::get('/group', 'GroupController@index')->name('group')->middleware('auth');
    Route::post('/group/post', 'GroupController@store')->middleware('auth');

    Route::get('members','MemberController@index')->middleware('auth');
    Route::post('members/insert','MemberController@insert')->name('members.insert')->middleware('auth');

    Route::get('dashboard','ArisanController@index')->name('dashboard')->middleware('auth')->middleware('auth');
    Route::get('view/{id}/group_','ArisanController@subarisan')->middleware('auth');

    Route::get('profile','ArisanController@profile')->name('profile')->middleware('auth');
    Route::get('profile_edit','ArisanController@editprofile')->name('profile_edit')->middleware('auth');
    Route::post('processupdate','ArisanController@updateprofile')->name('processupdate')->middleware('auth');

    // Route::get('peserta','ArisanController@Membersdata')->middleware('auth');
    Route::get('contact','ContactController@index')->name('contact')->middleware('auth');
    Route::post('contact/report','ContactController@store')->middleware('auth');
    // Route::post('processupdate','ArisanController@proses_update_profile')->name('processupdate');

    Route::get('winner','WinnerController@index')->name('winner')->middleware('auth');

    Route::get('dynamic-field', 'MemberController@utama');
    Route::post('dynamic-field/insert', 'MemberController@subinsert')->name('dynamic-field.insert');

    Route::get('page_lost','HomeController@page_error')->middleware('auth');

  });

