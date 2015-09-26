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
// login routes


Route::get('users/login',array("as"=>'login',"uses"=>"AuthController@index"));

Route::get('dashboard/home',array("as"=>'home',"uses"=>"DashboardController@index"));

Route::post('users/signin',array("as"=>'signin',"uses"=>"AuthController@signin"));

Route::post('users/logout',array("as"=>'logout',"uses"=>"AuthController@logout"));