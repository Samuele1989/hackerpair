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

// Route::get('events/{id}', 'EventsController@show')->name('events.show');

Route::resource('events', 'EventsController');

Route::resource('events/{event}', 'EventsController');

Route::get('events/category/{category}/{subcategory?}', 'EventsController@category');

Route::get('languages', 'LanguagesController@index')->name('languages.index');

Route::get('map', 'MapsController@index')->name('maps.index');

Route::get('locations', 'LocationsController@index')->name('locations.index');
