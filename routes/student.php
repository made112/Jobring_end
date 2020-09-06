<?php

use Illuminate\Support\Facades\Route;

Route::get('login',function (){
   return view('Student.student_login') ;
})->name('login_student');



Route::group(['namespace'=>'Student','middleware'=>'guest:admin'],function (){
    Route::get('account','UserController@index_account')->name('Account');
    Route::post('register','UserController@register')->name('post.register');
    Route::post('login','UserController@login')->name('post.login');

    Route::get('logout','UserController@logout')->name('user.logout');
    Route::post('update.account','UserController@account')->name('update.account');
    Route::get('email','UserController@form')->name('Form');
    Route::post('email/send','UserController@send')->name('email.send');
      Route::get('browseJob','UserController@show')->name('Brows.jobs');



});



/*

|--------------------------------------------------------------------------
| student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



