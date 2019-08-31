<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', 'Api\EmployeesController@index');
Route::get('/employees', 'Api\EmployeesController@index');
Route::get('/employee/{id}', 'Api\EmployeesController@show');
Route::get('/getHead/{id}','Api\EmployeesController@getHead');
Route::get('/structure', 'Api\EmployeesController@getTree');
Route::get('/departments','Api\EmployeesController@getDepartments');
Route::post('/employees/create', 'Api\EmployeesController@create');
Route::put('/employee/{id}', 'Api\EmployeesController@update');
Route::delete('/employee/{id}', 'Api\EmployeesController@destroy');

/*Route::group(['namespace' => 'Api',
    'as' => 'api.'], function () {
    Route::resource('companies', 'EmployeesController',
        ['except' => ['create', 'edit']]);
});*/

/*Route::resource('/employees', 'EmployeesController', [
    'except' => ['edit','show', 'store']
]);*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


