<?php
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

use Illuminate\Routing\RouteGroup;

Route::get('/', 'HomeController@index')->name('index');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::post('/contact', 'HomeController@send')->name('send');


Route::post('/login', 'Auth\LoginController@login');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');



Route::group(['prefix' => 'blog'], function () {
    Route::get('{slug}', 'BlogController@show')->name('post.single');

    Route::any('/{query?}', 'BlogController@search')->name('blog.search');
    Route::get('tag/{tag}', 'BlogController@searchByTag')->name('blog.searchByTag');

    // Route::domain('blog.thespot.ma')->get('/', 'BlogController@index')->name('blog');
});

// Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/webdev', 'HomeController@webdev')->name('webdev');
// Route::get('/dashboard/events', 'EventController@index')->name('events')->middleware('auth');
// Route::get('/dashboard/events/add', 'EventController@add')->name('event.add')->middleware('auth');


Route::prefix('dashboard')->group(function () {
    Route::resource('events', 'EventController')->middleware('auth');
});
