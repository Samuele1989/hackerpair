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

Route::get('/', 'WelcomeController@index');

Route::view('about', 'about.index')->name('about.index');

Route::view('about/book', 'about.book')->name('about.book');

Route::view('contact', 'contact.index')->name('contact.index');

// Route::get('events/{id}', 'EventController@show')->name('event.show');

Route::resource('events', 'EventController');

Route::resource('states', 'StateController');

// Route::get('events/category/{category}/{subcategory?}', 'EventController@category');

Route::get('languages', 'LanguagesController@index')->name('languages.index');

Route::get('map', 'MapsController@index')->name('maps.index');

Route::get('locations', 'LocationsController@index')->name('locations.index');
