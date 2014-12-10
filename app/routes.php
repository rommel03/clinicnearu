<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('prefix' => 'doctor'), function()
{
	Route::get('patient','doctor\patientController@index');
	Route::get('patient/add','doctor\patientController@add');
	Route::get('patient/search','doctor\patientController@search');
	Route::get('patient/user/{id}','doctor\patientController@view');
	Route::get('patient/edit/{id}','doctor\patientController@edit');
	
	
	Route::group(array('prefix' => 'ajax'), function(){
		Route::get('get-my-patient','doctor\ajax\patientController@getMyPatient');
		Route::get('get-patient-request','doctor\ajax\patientController@getPatientRequest');
		Route::get('search-patient','doctor\ajax\patientController@searchPatient');
	});

});
