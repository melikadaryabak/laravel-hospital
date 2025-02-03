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

Route::get('/', 'TestController@index' );

Route::get('/about', function(){
    return view('pages/about');
});

Route::post('/reports/user', 'ReportController@index');
Route::get('/login', function() {
    return view('pages/report-login');
});
Route::get('/reports/staff', function(){
    return view('pages/reports-staff');
});
Route::post('/reports/staff', 'ReportController@store');
Route::get('/reception', function(){
    return view('pages/reception');
});
Route::get('/reception/single', function(){
    return view('pages/reception-single');
});

Route::get('/{id}', 'TestController@show' );

Route::post('/', 'TestController@store' );
