<?php
use App\Http\Controllers\employeeController;

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
Route::get('/departments', 'DepartmentController@index');
Route::get('/department/create', 'DepartmentController@create');
Route::get('/department/edit/{id}', 'DepartmentController@edit');
Route::get('/department/{id}', 'DepartmentController@show');
Route::get('/department/delete/{id}', 'DepartmentController@destroy');
Route::post('/department', 'DepartmentController@store');
Route::post('/department/update/{id}', 'DepartmentController@update');

Route::get('/employees', 'EmployeeController@index');
Route::get('/employee/create', 'EmployeeController@create');
Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::get('/employee/{id}', 'EmployeeController@show');
Route::get('/employee/delete/{id}', 'EmployeeController@destroy');
Route::post('/employee', 'EmployeeController@store');
Route::post('/employee/update/{id}', 'EmployeeController@update');