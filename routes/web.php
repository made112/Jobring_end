<?php

use App\User;
use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\QueryBuilder;

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
    return view('site.front_dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('test',function (){
    return view('admin.section.section_test');
    });



Route::get('test',function (){
    return view('welcome');
//return $users = QueryBuilder::for(User::class)
//    ->allowedFilters(['name', 'email'])
//    ->get();
});
