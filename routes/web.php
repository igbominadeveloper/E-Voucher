<?php

use Illuminate\Http\Request;
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

Route::get('/user', function (Request $request){

    $user = \App\User::where('id',$request->user()->id)->first();

    return $user;

});

Route::get('/user/role', function (Request $request){

    $user = \App\User::with('roles')->where('id',$request->user()->id)->first();

    return $user;

});


Route::get('/voucher',[
    'uses' => 'VoucherController@index',
    'middleware' => ['role','auth'],
    'roles' => ['assistant','accountant','administrator']
]);


Route::get('/voucher/create',[
    'uses' => 'VoucherController@create',
    'middleware' => ['role','auth'],
    'roles' => ['assistant','accountant'],
]);

Route::post('/voucher',[
    'uses' => 'VoucherController@store',
    'middleware' => ['role','auth'],
    'roles' => ['assistant','accountant']
]);


Route::get('/officer',[
    'uses' => 'OfficerController@index',
    'as' => 'officers',
    'middleware' => ['role','auth'],
    'roles' => ['administrator','accountant']
]);

Route::post('/officer',[
    'uses' => 'OfficerController@store',
    'middleware' => ['role','auth'],
    'roles' => ['administrator','accountant']
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
