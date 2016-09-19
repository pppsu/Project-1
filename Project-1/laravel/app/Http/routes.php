<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

/*Route::get('/dd', function () {
return view('project/pj1');
});
Route::get('/as', function () {
return view('fd');
});*/

/*Route::resource('boards', 'Boards\\BoardsController');
Route::resource('customers', 'Customers\\CustomersController');
Route::resource('student', 'Students\\StusentController');*/

/*Route::group(['middleware' => 'web'], function () {
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/hello','HelloController@index');
});*/
/*Route::group(['middleware' => 'web'], function () {
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/index', 'StusentController@index');
});*/

Route::group(['middleware' => ['web']], function () {
	Route::auth();
	Route::get('project/home', 'ProjectController@home');
	Route::get('project/home/login', 'ProjectController@login');
	Route::get('project/student/index', 'ProjectController@Stuindex');
	Route::get('project/student/create', 'ProjectController@Stucreate');
	Route::get('project/student/form', 'ProjectController@Stuform');
	Route::get('project/student/cstus', 'ProjectController@Stucstus');

	Route::get('project/student/form/th', 'ProjectController@Stuform2');
	Route::get('project/student/form/en', 'ProjectController@StuformEN');

	Route::get('project/admin/home', 'ProjectController@Adhome');
	Route::get('project/admin/addAdmin', 'ProjectController@AddAm');
	Route::get('project/admin/deleteAdmin', 'ProjectController@deleteAm');

	Route::get('project/admin/homes', 'ProjectController@home2');

	Route::get('project/student/form/th/edit', 'ProjectController@edit');

	Route::get('project/Staff/AddMember', 'ProjectController@AddMember');
	Route::get('project/Staff/AddMember2', 'ProjectController@AddMember2');
	Route::get('project/Staff/permission', 'ProjectController@permission');
	Route::get('project/Staff/Addorganizations', 'ProjectController@Addorganizations');
	Route::get('project/Staff/add', 'ProjectController@add');
	Route::get('project/Staff/index', 'ProjectController@index');
	Route::get('project/Staff/edit', 'ProjectController@stfedit');
	Route::get('project/Staff/detail', 'ProjectController@detail');
	Route::get('project/Staff/home', 'ProjectController@home3');
	Route::get('project/Staff/Managemember', 'ProjectController@Managemember');
	Route::get('project/Staff/status', 'ProjectController@Stucstus');

});

Route::auth();

Route::get('/home', 'HomeController@index');
