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
// This is where you do the url configuration for your app like home page etc
//Remember that a view in laravel is like a template in django..the view brings us the UI of the app

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');






/*Route::get('/hello', function () {
    return ('<h2>hello</h2>');
});
Route::get('/about', function () {
    return view('Pages.about');
});

Route::get('/users/{id}', function ($id) {
    return 'Welcome User '. $id;
}); */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');
