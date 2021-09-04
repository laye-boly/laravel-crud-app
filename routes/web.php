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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('pages.about');
});
// Parametre
// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'tton nom est : '.$name.' et tu as lid '.$id;
// });

// Associer cette route au controllers PagesControllers
Route::get('/', 'PagesController@index'
);

Route::get('/about', 'PagesController@about'
);

Route::get('/services', 'PagesController@services'
);

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
