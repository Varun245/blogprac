<?php

use App\Http\Controllers\BlogsController;

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
//     return view('blogs.welcome');

// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs/allBlogs/{blog}/comments','BlogsController@comment');
Route::get('/blogs/{blog}/viewComment','BlogsController@viewComment');

Route::get('/blogs/allBlogs', 'BlogsController@showall');
Route::post('/blogs/{blog}/edit', 'BlogsController@update');
Route::get('/blogs', 'BlogsController@index');
Route::get('/blogs/{blog}/edit', 'BlogsController@edit');
Route::get('/blogs/create', 'BlogsController@create');
Route::post('/blogs', 'BlogsController@store');
// Route::get('/blogs/{blog}', 'BlogsController@show');
Route::post('blogs/{blog}/comments', 'BlogsCommentsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
