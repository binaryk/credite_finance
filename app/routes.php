<?php 


# CSRF Protection
// Route::when('*', 'csrf', ['POST', 'PUT', 'PATCH', 'DELETE']);
# Static Pages. Redirecting admin so admin cannot access these pages.
Route::group(['before' => 'redirectAdmin'], function()
{
	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']); 

});

# Registration
Route::group(['before' => 'guest'], function()
{
	 Route::get('/register', 'RegistrationController@create');
	 Route::post('/register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);

	 Route::get('/clienti-formular', ['as' =>'clienti-guest', 'uses'=>'Credite\Datatable\PrimaCasaController@index',]);
});

# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create'])->before('guest');
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController' , ['only' => ['create','store','destroy']]);

# Forgotten Password
Route::group(['before' => 'guest'], function()
{
	Route::get('forgot_password', 'RemindersController@getRemind');
	Route::post('forgot_password',['as' => 'forgot_password','uses' => 'RemindersController@postRemind']);
	Route::get('reset_password/{token}', 'RemindersController@getReset');
	Route::post('reset_password/{token}', 'RemindersController@postReset');
});

# Standard User Routes
Route::group(['before' => 'auth|standardUser'], function()
{
	Route::get('userProtected', 'StandardUserController@getUserProtected');
	Route::resource('profiles', 'UsersController', ['only' => ['show', 'edit', 'update']]);
	Sys\Route::make()->define();

});
Sys\RouteBefore::make()->define();
# Admin Routes

Route::group(['before' => 'auth|admin'], function()
{
	Route::get('/administration', ['as' => 'admin_dashboard', 'uses' => 'HomeController@showWelcome']);
	Route::resource('admin/profiles', 'AdminUsersController', ['only' => ['index', 'show', 'edit', 'update', 'destroy']]);
});


Route::get('clienti/{type?}/{edit?}', [ 'as' 					 => 'clienti-index', 'uses' => 'Credite\Datatable\PrimaCasaController@index']);
Route::get('persoane-fizice/{id}/{type?}', [ 'as' 				 => 'persoane-fizice-row-source', 'uses' => 'Credite\Datatable\PrimaCasaController@rows']);
Route::get('client-document/{id}/{id_client}', [ 'as' 			 => 'client-documents', 'uses' => 'Credite\Datatable\ClientDocumentsController@index']);
Route::get('client_document/row-source/{id}/{id_client}', [ 'as' => 'client-documents-row-source', 'uses' => 'Credite\Datatable\ClientDocumentsController@rows']);
Route::post('upload-client-document/{id_client?}',[ 'as' 		 => 'upload-client-documents', 'uses' => 'Credite\Datatable\ClientDocumentsController@upload']);
Route::post('delete-client-document',[ 'as' => 'delete-client-documents', 'uses' => 'Credite\Datatable\ClientDocumentsController@delete']);
Route::get('download-client-documents/{document_id}', [ 'as' 	 => 'download-client-documents', 'uses' => 'Credite\Datatable\ClientDocumentsController@download']);

Route::get('test', 'HomeController@showWelcome2');
include app_path() . '/~credite/routes/user.route.php';