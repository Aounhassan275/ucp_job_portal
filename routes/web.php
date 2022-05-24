<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
/*******************ADMIN PANEL ROUTES************/
Route::group(['prefix' => 'admin', 'as'=>'admin.'], function () {
 
    /*******************LOGIN ROUTES*************/
    Route::view('login', 'admin.auth.index')->name('login');
    Route::post('login','AuthController@login');
       /******************MESSAGE ROUTES****************/
       Route::resource('message', 'MessageController');  
    Route::group(['middleware' => 'auth:admin'], function () { 
    /*******************Logout ROUTES*************/       
    Route::get('logout','AuthController@logout')->name('logout');
    /*******************Dashoard ROUTES*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /******************CATEGORY ROUTES****************/
    Route::resource('category', 'CategoryController');
    /******************Blog Category ROUTES****************/
    Route::resource('bcategory', 'Admin\BcategoryController');
    /******************Blog ROUTES****************/
    Route::resource('blog', 'Admin\BlogController');
     Route::view('message', 'admin.message.index')->name('messages.index');
     Route::get('message/active/{id}', 'MessageController@active')->name('message.active');
     /******************ADMIN ROUTES****************/
    Route::resource('admin', 'AdminController');
    /******************CANDIDATE Profile ROUTES****************/
    Route::view('candidate', 'admin.candidate.index')->name('candidate.index');
    Route::view('candidate/profile', 'admin.profile.profile')->name('profile.profile');
    Route::get('candidate/approved/{id}', 'Admin\CandidateController@approved')->name('profile.approved');
    Route::get('candidate/rejected/{id}', 'Admin\CandidateController@rejected')->name('profile.rejected');
    Route::get('candidate/profile/{id}', 'Admin\CandidateController@showProfile')->name('profile.show');
    Route::get('profile/{id}', 'Admin\CandidateController@detail')->name('profile.index');
    Route::get('candidate/active/{id}', 'Admin\CandidateController@active')->name('candidate.active');
    Route::get('candidate/actives/{id}', 'Admin\CandidateController@actives')->name('candidate.actives');
    Route::get('candidate/block/{id}', 'Admin\CandidateController@block')->name('candidate.block');
        /******************Candidate Hire ROUTES****************/
        Route::view('hire', 'admin.hire.index')->name('hire.index');
        Route::view('hire/completed', 'admin.hire.completed')->name('hire.completed');
        Route::get('completed/{id}', 'Admin\HireController@completed')->name('hire.complete');
        Route::get('hire/{id}', 'Admin\HireController@detail')->name('hire.detail');
    /******************INSTITUTE PROVIDER Profile ROUTES****************/
    Route::view('institute', 'admin.institute.show')->name('institute.show');
    Route::get('institute/{id}', 'Admin\InstituteController@detail')->name('institute.detail');
    Route::get('institute/active/{id}', 'Admin\InstituteController@active')->name('institute.active');
    Route::get('institute/block/{id}', 'Admin\InstituteController@block')->name('institute.block');
    Route::get('institute/delete/{id}', 'Admin\InstituteController@delete1')->name('institute.delete');
      /******************Job ROUTES****************/
      Route::view('job', 'admin.job.index')->name('job.index');
      Route::get('job/approved/{id}', 'Admin\JobController@approved')->name('job.approved');
      Route::get('job/block/{id}', 'Admin\JobController@block')->name('job.block');
      Route::get('job/delete/{id}', 'Admin\JobController@delete1')->name('job.delete');
});
});
/*******************CANDIDATE ROUTES************/
Route::group(['prefix' => 'candidate', 'as'=>'candidate.' ,'namespace' => 'Candidate'], function () {

    /*******************LOGIN ROUTES*************/
    Route::view('login', 'candidate.auth.login')->name('login');
    Route::view('register', 'candidate.auth.register')->name('register');
    Route::post('login','AuthController@login');
    /******************CANDIDATE OWN ROUTES****************/
    Route::resource('candidate', 'CandidateController');
    Route::group(['middleware' => 'auth:candidate'], function () { 
    Route::get('logout','AuthController@logout')->name('logout');
    /******************Profile  ROUTES****************/
    Route::resource('profile', 'ProfileController');
    /******************Job ROUTES****************/
    Route::get('job', 'JobController@show')->name('job.index');
    Route::get('job/{id}', 'JobController@detail')->name('job.show');
     /******************Apply ROUTES****************/
     Route::resource('applicant', 'ApplicantController');
      /******************Profile ROUTES****************/
      Route::view('profiles', 'candidate.profiles.index')->name('profiles.index');
      Route::view('profiles/show', 'candidate.auth.profile')->name('profiles.show');
        /******************Candidate Hire ROUTES****************/
        Route::view('hire', 'candidate.hire.index')->name('hire.index');
        Route::get('onHold/{id}', 'HireController@onHold')->name('hire.onHold');
        Route::get('inProccess/{id}', 'HireController@inProccess')->name('hire.inProccess');
        Route::get('hire/{id}', 'HireController@detail')->name('hire.detail');

        /******************Dashboard ROUTES****************/
    Route::view('dashboard', 'candidate.dashboard.index')->name('dashboard.index');
});
});
/*******************Institue PROVIDER ROUTES************/
Route::group(['prefix' => 'institute', 'as'=>'institute.' ,'namespace' => 'Institute'], function () {

    /*******************LOGIN ROUTES*************/
    Route::view('login', 'institute.auth.login')->name('login');
    Route::view('register', 'institute.auth.register')->name('register');
    Route::post('login','AuthController@login');
        /****************** OWN ROUTES****************/
        Route::resource('institute', 'InstituteController');  
    Route::group(['middleware' => 'auth:institute'], function () { 
    Route::get('logout','AuthController@logout')->name('logout');
    /******************Dashboard ROUTES****************/
    Route::view('dashboard', 'institute.dashboard.index')->name('dashboard.index');
     /******************Profile ROUTES****************/
     Route::view('profile', 'institute.profile.index')->name('profile.index');
     Route::view('profile/show', 'institute.auth.profile')->name('profile.show');
     Route::get('search/profile', 'AuthController@searchCandidate');
     /******************CanidateApplication ROUTES****************/
     Route::view('applicant', 'institute.applicant.index')->name('applicant.index');
     Route::get('applicant/{id}', 'ApplicantController@detail')->name('applicant.show');
     /******************Candidate Profile HIRE ROUTES****************/
    Route::get('completed/{id}', 'HireController@completed')->name('hire.completed');
     Route::resource('hire', 'HireController'); 
    /******************JOB ROUTES****************/
    Route::resource('job', 'JobController');
    Route::view('browse_job', 'institute.job.browse_job')->name('job.browse_job');
    /******************CANDIDATE ROUTES****************/
    Route::get('browse_candidate', 'CandidateController@index')->name('candidate.index');
    Route::get('candidate/{id}', 'CandidateController@detail')->name('candidate.show');
});
});

/******************FRONTEND ROUTES****************/
Route::view('/', 'front.home.index');
Route::view('category', 'front.category.index');
Route::view('contact_us', 'front.contact.index');
Route::view('candidates', 'front.candidate.index');
Route::view('institutes', 'front.institute.index');
Route::view('about_us', 'front.about.index');
Route::get('category/{name}', 'PageController@showCategoryNext');
Route::get('candidate/{name}', 'PageController@showCandidateNext');
Route::get('jobs', 'PageController@jobs');
Route::get('job/{title}', 'PageController@showJobNext');
Route::view('blogs', 'front.blog.index');
Route::get('blogs/{title}', 'PageController@showBlogNext');
Route::get('search', 'PageController@search');