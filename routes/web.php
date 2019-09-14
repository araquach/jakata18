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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index');
Route::get('/details', 'PagesController@details');
Route::get('/news', 'PagesController@news');
Route::get('/oldnews', 'PagesController@oldnews');
Route::get('/recruitment', 'PagesController@recruitment');
// Route::get('/offers', 'PagesController@offers');
// Route::get('/prices', 'PagesController@prices');
Route::get('/booking', 'PagesController@booking');
Route::get('/reviews', 'PagesController@reviews');
Route::get('/team', 'PagesController@team');
Route::get('/team/{team?}', 'PagesController@teamInd');
Route::get('/salon', 'PagesController@salon');

Route::get('/offers', 'PagesController@offerAll');
Route::get('/offer/georgia', 'PagesController@offerGeorgia');
Route::get('/offer/abbi', 'PagesController@offerAbbi');
Route::get('/offer/layla', 'PagesController@offerLayla');
Route::get('/offer/lauren', 'PagesController@offerLauren');
Route::get('/offer/lucy', 'PagesController@offerLucy');

Route::get('/trainee', 'PagesController@trainee');
Route::get('/kebelo', 'PagesController@kebelo');
Route::get('/reviews/{stylist?}', 'PagesController@reviews');
Route::get('/base', 'PagesController@relocation');
Route::get('/mattsback', 'PagesController@mattsback');

Route::get('/prospect/emailmale', 'ProspectController@emailMale');
Route::get('/prospect/emailmale2', 'ProspectController@emailMale2');
Route::get('/prospect/emailfemale', 'ProspectController@emailFemale');
Route::get('/prospect/emailfemale2', 'ProspectController@emailFemale2');
Route::get('/prospect/emailfemale3', 'ProspectController@emailFemale3');
Route::get('/prospect/test', 'ProspectController@test');

Route::get('/campaign', 'CampaignController@index');
Route::get('/campaign/create', 'CampaignController@create');
Route::post('/campaign/store', 'CampaignController@store');

Route::get('/respondants', 'CampaignRespondantController@index');
Route::get('/respondant/create', 'CampaignRespondantController@create');
Route::post('/respondant/store', 'CampaignRespondantController@store');
Route::get('/bighairdo', 'CampaignRespondantController@hairdo');
Route::get('/base', 'PagesController@base');


Route::get('/admin', 'AdminController@index');

Route::get('contact',
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('sendEmail',
  ['as' => 'sendEmail', 'uses' => 'ContactController@sendEmail']);

Route::resource('apprentice', 'ApprenticeController');
Route::resource('stylist', 'StylistController');

Route::get('/prospect/admin', 'ProspectController@admin');
Route::patch('prospect/{prospect}', 'ProspectController@update');
Route::get('prospect/{prospect}/note', 'ProspectController@createNote');
Route::post('prospect/note', 'ProspectController@storeNote');

Route::get('/prospect/taster', 'ProspectController@tasterIndex');
Route::get('/prospect/freeproducts', 'ProspectController@freeproductsIndex');
Route::get('/prospect/freeproducts/{prospect}', 'ProspectController@freeproductsShow' );
Route::get('/prospect/taster/{prospect}', ['as' => 'prospect.show', 'uses' => 'ProspectController@tasterShow']);

Route::get('/freeproducts', 'ProspectController@freeproducts');
Route::get('/freeproducts/man', 'ProspectController@freeproducts');
Route::get('/freeproducts/create', 'ProspectController@create');
Route::get('/freeproducts/man/create', 'ProspectController@create');
Route::post('prospect/store', 'ProspectController@store');

Route::get('/taster', 'ProspectController@taster');
Route::get('/taster/create', 'ProspectController@tasterCreate');
Route::post('/taster/store', 'ProspectController@tasterStore');


Route::get('feedback/{client}',
  ['as' => 'feedbackCreate', 'uses' => 'FeedbackController@create']);
Route::post('feedback/store',
  ['uses' => 'FeedbackController@store']);

Route::get('stylist/{stylist}/note',
  ['as' => 'stylistNoteCreate', 'uses' => 'StylistController@createNote']);
Route::post('stylist/note',
  ['uses' => 'StylistController@storeNote']);

Route::get('apprentice/{apprentice}/note',
  ['as' => 'apprenticeNoteCreate', 'uses' => 'ApprenticeController@createNote']);
Route::post('apprentice/note',
  ['uses' => 'ApprenticeController@storeNote']);

Route::get('offer/{client}',
  ['uses' => 'OfferController@show']);
Route::get('offer2/{client}',
  ['uses' => 'OfferController@show2']);
Route::patch('offer/{client}',
  ['as' => 'offerUpdate', 'uses' => 'OfferController@update']);

Route::get('/potential', 'PotentialEmployeeController@index');
Route::get('/potential/{potential}', 'PotentialEmployeeController@edit');
Route::patch('potential/{potential}', 'PotentialEmployeeController@update');
Route::get('/joinus', 'PotentialEmployeeController@create');
Route::post('joinus/store',
  ['uses' => 'PotentialEmployeeController@store']);


Route::get('/superstylist', 'CustomerServiceController@index');
Route::get('/superstylist/{user}/create', 'CustomerServiceController@create');
Route::post('/superstylist/create', 'CustomerServiceController@store');

Route::get('/superstylist/admin', 'CustomerServiceAdminController@index');
Route::get('/superstylist/test', 'CustomerServiceAdminController@test');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{blog}', 'BlogController@show');
