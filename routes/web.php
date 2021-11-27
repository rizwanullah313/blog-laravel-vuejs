<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

// Route::get('/home', function(){
//     return "<h1>this is home</h1>";
// // });
// Route::get('/about', function(){
//     return view('about');
// });

// Route::get('/about/{id}/{name}', function($id, $name){
//     return "this is id: " . $id . " and name is: ". $name;
// });
Route::get('/',"App\Http\Controllers\PagesController@index");
Route::get('/about',"App\Http\Controllers\PagesController@about");
Route::get('/services',"App\Http\Controllers\PagesController@services");

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController', 'index')->name('home');

Route::resource('posts', 'App\Http\Controllers\PostsController'); 