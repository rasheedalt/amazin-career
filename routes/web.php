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

Route::get('/','HomeController@home');
Route::get('/admin','HomeController@login');
Route::group(['middleware' => ['auth:web']], function(){
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/generate-login','AdminController@generateLogin')->name('login.generate');
    Route::post('/generate-login','AdminController@registerUser')->name('login.generate');
    Route::get('/deactivate-login','AdminController@deactivateLogin')->name('login.deactivate_page');
    Route::post('/deactivate-login/{user}','AdminController@deactivateUser')->name('login.deactivate');
    Route::get('/change-password','AdminController@changePasswordView')->name('password.change');
    Route::post('/change-password','AdminController@changePassword')->name('password.change');
    Route::get('/blog-post','AdminController@blogPostView')->name('blog.post');
    Route::post('/blog-post','AdminController@blogPost')->name('blog.post');
    Route::get('/scholarship-post','AdminController@postScholarshipView')->name('scholarship.showform');
    Route::get('/admin/job-post','AdminController@postJobView')->name('admin.job_post');
    Route::post('/admin/job-post','AdminController@postJob')->name('admin.job_post');
    Route::get('/manage-jobs','AdminController@ManageJobs')->name('admin.manage_jobs');
    Route::post('/activate-toggle/{job}','JobController@ActivateToggle')->name('admin.activate_toggle');
    Route::post('/approve-job/{job}','JobController@approveJob')->name('admin.approve_job');
    Route::post('/delete-job/{job}','JobController@deleteJob')->name('admin.delete_job');
    Route::get('/emails','SubscribedEmailsController@index')->name('admin.emails');

    // Service Requests
    Route::get('/requests/jobs','AdminController@jobRequests')->name('admin.job_requests');
    Route::get('/requests/business-plan','AdminController@businessPlanRequests')->name('admin.business_plan_requests');
    Route::get('/requests/linkedIn-opt','AdminController@linkedInOptimizationRequests')->name('admin.linkedin_requests_requests');
    Route::get('/requests/cover-letter','AdminController@coverLetterRequests')->name('admin.cover_letter_requests');
    Route::get('/requests/business-registration','AdminController@businessRegistrationRequests')->name('admin.business_reg_requests');
    Route::get('/requests/cv-rewrite','AdminController@cvRewriteRequests')->name('admin.cv_rewrite_requests');
});

Auth::routes();
Auth::routes(['register' => false]);

// Static Pages
Route::get('/services', 'StaticPagesController@servicesPage')->name('services.page');
Route::get('/about', 'StaticPagesController@aboutPage')->name('about.page');
Route::get('/contact', 'StaticPagesController@contactPage')->name('contact.page');
Route::get('/post-job', 'StaticPagesController@postJobPage')->name('post-job.page');
Route::get('/disclaimer', 'StaticPagesController@disclaimerPage')->name('disclaimer.page');
Route::get('/terms', 'StaticPagesController@termsPage')->name('terms.page');
Route::get('/policy', 'StaticPagesController@policyPage')->name('policy.page');

Route::get('/services/{service}', 'ServiceController@viewService')->name('service.view');

// Jobs
Route::get('/jobs/{job}', 'JobController@view')->name('job.view');
Route::get('/post-job', 'JobController@postJobView')->name('job.post');
Route::post('/post-job', 'JobController@saveJob')->name('job.post');
Route::get('/view-jobs/{stateCode}', 'JobController@viewStateJobs')->name('job.state');
Route::post('/jobs/search', 'JobController@searchJob')->name('job.search');

// Scholarship
Route::get('/scholarships', 'ScholarshipsController@index')->name('scholarships.list');
Route::get('/scholarships/{scholarship}', 'ScholarshipsController@show')->name('scholarship.view');
Route::post('/scholarships/post', 'ScholarshipsController@store')->name('scholarship.post');

// Posts
Route::post('/blog/post', 'PostsController@store')->name('post.store');

//email sub
Route::post('/subscribe', 'SubscribedEmailsController@store')->name('email.subscribe');

//blog
Route::get('/blog-posts', 'PostsController@index')->name('posts');
Route::get('/blog/{post}', 'PostsController@show')->name('post');

// ContactMessage
Route::post('/contact/send-message', 'ContactController@sendContactMail')->name('contact.message');

// Services
Route::get('/business-plan', 'ServiceController@businessPlanView')->name('service.business_plan');
Route::post('/business-plan', 'ServiceController@postBusinessPlan')->name('service.business_plan');

Route::get('/company-registraion', 'ServiceController@companyRegistrationView')->name('service.company_reg');
Route::post('/company-registraion', 'ServiceController@postCompanyRegistration')->name('service.company_reg');

Route::get('/cover-letter', 'ServiceController@coverLetterView')->name('service.cover_letter');
Route::post('/cover-letter', 'ServiceController@postCoverLetter')->name('service.cover_letter');

Route::get('/cv-review', 'ServiceController@cvReviewView')->name('service.cv_review');
Route::post('/cv-review', 'ServiceController@postCvReview')->name('service.cv_review');

Route::get('/linkedIn-optimization', 'ServiceController@linkedInOptimizationView')->name('service.linkin_opt');
Route::post('/linkedIn-optimization', 'ServiceController@postLinkedInOptimization')->name('service.linkin_opt');

Route::get('/states-jobs', 'JobController@allStates')->name('states.all');

Route::get('/home', 'HomeController@index')->name('home');
