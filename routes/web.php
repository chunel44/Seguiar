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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/noticias', 'HomeController@noticias')->name('noticias');
Route::get('noticia/{slug}', 'HomeController@noticia')->name('noticia.details');
Route::get('contacto', 'HomeController@contacto')->name('contacto');
Route::get('proyectos', 'HomeController@proyectos')->name('proyectos');
Route::get('productos', 'HomeController@productos')->name('productos');

Route::get('proyectos/{proyecto}/{ciudad}', 'HomeController@proyecto')->name('proyectos.details');




//admin
Route::group(['as'=>'admin.','prefix'=>'admin','namespace' => 'Admin'], function()
{
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('settings', 'SettingsController@index')->name('settings');
    Route::put('profile-update', 'SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update', 'SettingsController@updatePassword')->name('password.update');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::get('/pending/post', 'PostController@pending')->name('post.pending');
});