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
    Route::view('reset', 'admin.auth.reset')->name('reset');
    Route::post('login','AuthController@login');
    Route::post('reset','AuthController@reset');
   
       /******************MESSAGE ROUTES****************/
       Route::resource('message', 'MessageController');  

    Route::group(['middleware' => 'auth:admin'], function () { 
    /*******************Logout ROUTES*************/       
    Route::get('logout','AuthController@logout')->name('logout');
    /*******************Dashoard ROUTES*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /******************CATEGORY ROUTES****************/
    Route::resource('category', 'CategoryController');
    /******************Payment Way ROUTES****************/
    Route::resource('payment', 'Admin\PaymentController'); 
     /******************Price ROUTES****************/
     Route::resource('price', 'Admin\PriceController');   
    /******************SKILLS ROUTES****************/
    Route::resource('skill', 'Admin\SkillController');
   /******************REVIEW ROUTES****************/
    Route::resource('review', 'Admin\ReviewController');
   /******************Add ROUTES****************/
    Route::resource('add', 'Admin\AddController');
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
    Route::view('candidate/deposit', 'admin.deposit.index')->name('deposit.index');
    Route::get('candidate/deposit/{id}', 'Admin\CandidateController@deposit')->name('deposit.detail');
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
    Route::view('institute/deposit', 'admin.institute.index')->name('institute.index');
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
      /******************WITHDRAW ROUTES****************/
      Route::view('withdraw', 'admin.withdraw.index')->name('withdraw.index');
      Route::get('withdraw/completed/{id}', 'Admin\I_withdrawController@completed')->name('i_withdraw.completed');
      Route::get('withdraw/onhold/{id}', 'Admin\I_withdrawController@onhold')->name('i_withdraw.onhold');
      Route::get('c_withdraw/completed/{id}', 'Admin\C_withdrawController@completed')->name('c_withdraw.completed');
      Route::get('c_withdraw/onhold/{id}', 'Admin\C_withdrawController@onhold')->name('c_withdraw.onhold');      
      Route::get('s_withdraw/completed/{id}', 'Admin\S_withdrawController@completed')->name('s_withdraw.completed');
      Route::get('s_withdraw/onhold/{id}', 'Admin\S_withdrawController@onhold')->name('s_withdraw.onhold');
      Route::get('mwithdraw/completed/{id}', 'Admin\MwithdrawController@completed')->name('mwithdraw.completed');
      Route::get('mwithdraw/onhold/{id}', 'Admin\MwithdrawController@onhold')->name('mwithdraw.onhold');

});
});
/*******************CANDIDATE ROUTES************/
Route::group(['prefix' => 'candidate', 'as'=>'candidate.' ,'namespace' => 'Candidate'], function () {

    /*******************LOGIN ROUTES*************/
    Route::view('login', 'candidate.auth.login')->name('login');
    Route::view('register', 'candidate.auth.register')->name('register');
    Route::post('login','AuthController@login');
    Route::get('register/{code}', 'AuthController@code');
    Route::view('verification', 'candidate.auth.forget')->name('verification');
    Route::view('reset', 'candidate.auth.reset')->name('reset');
    Route::post('verification','AuthController@sendVerification')->name('verification');
    Route::post('resetPassword','AuthController@resetPassword')->name('resetPassword');
    /******************CANDIDATE OWN ROUTES****************/
    Route::resource('candidate', 'CandidateController');
    Route::group(['middleware' => 'auth:candidate'], function () { 
    Route::get('logout','AuthController@logout')->name('logout');
    /******************Profile  ROUTES****************/
    Route::resource('profile', 'ProfileController');
    /******************Job ROUTES****************/
    Route::get('job', 'JobController@show')->name('job.index');
    Route::get('job/{id}', 'JobController@detail')->name('job.show');
    /******************Deposit ROUTES****************/
    Route::resource('deposit', 'DepositController');
     /******************Apply ROUTES****************/
     Route::resource('applicant', 'ApplicantController');
      /******************Profile ROUTES****************/
      Route::view('profiles', 'candidate.profiles.index')->name('profiles.index');
      Route::view('profiles/show', 'candidate.auth.profile')->name('profiles.show');
        /******************Candidate Hire ROUTES****************/
        Route::view('hire', 'candidate.hire.index')->name('hire.index');
        Route::get('onHold/{id}', 'HireController@onHold')->name('hire.onHold');
        Route::get('hire/{id}', 'HireController@detail')->name('hire.detail');

        /******************Dashboard ROUTES****************/
    Route::view('dashboard', 'candidate.dashboard.index')->name('dashboard.index');
    /******************REFER ROUTES****************/
    Route::view('refer', 'candidate.refer.index')->name('refer.index');
    /******************WITHDRAW ROUTES****************/
    Route::resource('c_withdraw', 'C_withdrawController');

});
});
/*******************Institue PROVIDER ROUTES************/
Route::group(['prefix' => 'institute', 'as'=>'institute.' ,'namespace' => 'Institute'], function () {

    /*******************LOGIN ROUTES*************/
    Route::view('login', 'institute.auth.login')->name('login');
    Route::view('register', 'institute.auth.register')->name('register');
    Route::post('login','AuthController@login');
    Route::get('register/{code}', 'AuthController@code');
    Route::view('verification', 'institute.auth.forget')->name('verification');
    Route::view('reset', 'institute.auth.reset')->name('reset');
    Route::post('verification','AuthController@sendVerification')->name('verification');
    Route::post('resetPassword','AuthController@resetPassword')->name('resetPassword');
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
 /******************Application ROUTES****************/
 Route::view('sapplicant', 'institute.sapplicant.index')->name('sapplicant.index');
 Route::get('sapplicant/{id}', 'SapplicantController@detail')->name('sapplicant.show');
    /******************Depsoit OWN ROUTES****************/
    Route::resource('i_deposit', 'I_depositController');    
     /******************Candidate Profile HIRE ROUTES****************/
     Route::resource('hire', 'HireController'); 
    /******************JOB ROUTES****************/
    Route::resource('job', 'JobController');
    Route::view('browse_job', 'institute.job.browse_job')->name('job.browse_job');
    /*******************REFER ROUTES*************/
    Route::view('refer', 'institute.refer.index')->name('refer.index');
    /******************CANDIDATE ROUTES****************/
    Route::get('browse_candidate', 'CandidateController@index')->name('candidate.index');
    Route::get('candidate/{id}', 'CandidateController@detail')->name('candidate.show');
    /******************WITHDRAW ROUTES****************/
    Route::resource('i_withdraw', 'I_withdrawController');





});
});

/******************FRONTEND ROUTES****************/
Route::view('/', 'front.home.index');
Route::view('category', 'front.category.index');
Route::view('contact_us', 'front.contact.index');
Route::view('signup_login', 'front.login.index');
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
Route::get('file_download', 'PageController@getDownload')->name('form.download');
Route::get('add_code_to_member', 'PageController@addCode');
Route::view('terms_&_condition', 'front.terms.index')->name('terms.index');





Route::post('price/get',function(Request $request){
    return response()->json(Category::find($request->id)->price);
})->name('price.get');


Route::get('/cd', function() {
    Artisan::call('config:cache');
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed', [ '--class' => DatabaseSeeder::class]);
    Artisan::call('view:clear');
    return 'DONE';
});
Route::get('/migrate', function() {
    Artisan::call('migrate');
    return 'DONE';
});