<?php


route::get('/', 'employeeController@GetEmployee');
route::get('/CreateEmployee', 'employeeController@CreateEmployee');
route::post('/SaveEmployee', 'employeeController@SaveEmployee'); 
route::post('/DeleteEmployee', 'employeeController@DeleteEmployee');

















// Route::get('/', function () {
// //     return view('welcome');
// // });