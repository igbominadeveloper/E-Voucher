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
Route::get('/', function(){
    return redirect('/home');
});

Route::get('/voucher',[
    'uses' => 'VoucherController@create',
    'middleware' => 'role',
    'roles' => 'accountant'
]);

Route::post('/voucher',[
    'uses' => 'VoucherController@store',
    'middleware' => 'role',
    'roles' => 'accountant'
]);


Route::get('/officers',[
    'uses' => 'OfficerController@index',
    'as' => 'officers',
    'middleware' => ['role','auth'],
    'roles' => 'administrator'
]);

Route::post('/officers',[
    'uses' => 'OfficerController@store',
    'middleware' => ['role','auth'],
    'roles' => 'administrator'
]);

Route::get('/home', [
    'uses' => 'SessionController@home',
    'as' => 'home',
    'middleware' => 'auth',
]);

Route::get('/login', [
    'uses' => 'SessionController@create',
    'as' => 'login',
    'middleware' => 'guest',
]);

Route::post('/login', [
    'uses' => 'SessionController@store',
    'middleware' => 'guest',
]);

Route::get('/users', [
    'uses' => 'SessionController@index',
    'as' => 'users',
    'middleware' => ['auth','role'],
    'roles' => 'administrator'
]);

Route::get('/users/register', [
    'uses' => 'SessionController@register',
    'as' => 'newaccount',
    'middleware' => ['auth','role'],
    'roles' => 'administrator'

]);

Route::post('/users/register', [
    'uses' => 'SessionController@fresh',
    'middleware' => ['auth','role'],
    'roles' => 'administrator'
]);

Route::get('/logout', [
    'uses' => 'SessionController@destroy',
    'as' => 'logout',
    'middleware' => 'auth',
]);
