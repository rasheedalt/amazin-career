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
Route::get('/post-job', 'StaticPagesController@postJobPage')->name('post-job.page');

Route::get('/services/{service}', 'ServiceController@viewService')->name('service.view');

// Jobs
Route::get('/jobs/{job}', 'JobController@view')->name('job.view');

// Scholarship
Route::get('/scholarships', 'ScholarshipsController@index')->name('scholarships.list');
Route::get('/scholarships/{scholarship}', 'ScholarshipsController@view')->name('scholarship.view');


Route::get('/states-jobs', 'JobController@allStates')->name('states.all');
