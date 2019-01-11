<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'api/v1'], function () use ($router) {

	$router->get('/', function () {
		return view('index');
	});
 
	$router->get('employees','EmployeeController@index');

	$router->post('employee/create','EmployeeController@createEmployee');

	$router->get('employee/{id}','EmployeeController@showEmployee');
 
	$router->put('employee/update/{id}','EmployeeController@updateEmployee');
 	 
	$router->delete('employee/delete/{id}','EmployeeController@deleteEmployee');
});