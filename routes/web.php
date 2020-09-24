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

Route::get('/', function () {
    return view('welcome');
});

// Static Pages
Route::get('/services', 'StaticPagesController@servicesPage')->name('services.page');
Route::get('/about', 'StaticPagesController@aboutPage')->name('about.page');
Route::get('/contact', 'StaticPagesController@contactPage')->name('contact.page');

Route::get('/services/{service}', 'ServiceController@viewService')->name('service.view');
Route::get('/jobs/{job}', 'JobController@view')->name('job.view');
