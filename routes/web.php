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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard-admin');
        Route::resource('admin-artikels', 'ArtikelController');
        Route::resource('admin-gallery', 'ArtikelGalleryController');
        Route::resource('admin-category', 'CategoryController');
        Route::resource('admin-comment', 'CommentController');

        Route::get('admin-artikels/{id}/gallery', 'ArtikelController@gallery')
             ->name('artikels.gallery');
        
      
        
    });

Auth::routes(['register' => false]);

Route::get('/', 'DashboardController@index')->name('home');

Route::get('/show/{slug}', 'DashboardController@show')->name('read');

Route::get('/list/{category}', 'DashboardController@eye')->name('category');

Route::get('/all', 'DashboardController@all')->name('all');

Route::post('/addcomment', 'DashboardController@addcomment')->name('addcomment');


