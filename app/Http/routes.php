<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the application.
| The routes are cached(In .ebextensions/02artisan.config) before
| going into production.
|
*/

//For Testing Purposes
// Route::get('/j', function(){
//  return view('emails.visaApplicantInfo');
// });

Route::any('/', 'MainPagesController@index');

Route::any('/home', 'MainPagesController@index');

Route::get('/about', 'MainPagesController@about');

Route::get('/contacts', 'MainPagesController@contacts');

Route::get('/tests/{testName}', 'MainPagesController@tests');

Route::get('/programs/{programName}', 'MainPagesController@programs');

Route::get('/visits/{category}', 'MainPagesController@visits');

Route::get('/downloads/{item}', 'MainPagesController@downloads');

Route::get('/achievements/{year}', 'MainPagesController@achievements');

Route::get('/faq','MainPagesController@faq');




Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('/settings/resetPassword', 'UserController@resetPassword');
Route::resource('settings','UserController');

Route::group(['prefix'=>'admin'], function(){

    Route::get('students','StudentsController@manage');
    Route::post('uploads', 'AdminController@manageUploads');
    Route::post('addAchievement', 'AdminController@addAchievement');
    Route::post('addVisit', 'AdminController@addVisit');

});

Route::resource('payments', 'PaymentsController');

Route::resource('admin','AdminController');

Route::resource('testDates', 'TestDatesController');

Route::resource('students','StudentsController');

Route::resource('ACTScore','ACTScoreController');

Route::resource('visa', 'VisaController');

Route::resource('testAccounts', 'TestAccountsController');


