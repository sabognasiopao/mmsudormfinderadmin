<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/admindashboard', function () {
    return view('admindashboard');
});

Route::get('/dormitorydetails', function () {
    return view('dormitorydetails');
});

Route::get('/occupantslist', function () {
    return view('occupantslist');
});

Route::get('/occupantsdetails', function () {
    return view('occupantsdetails');
});

Route::get('/offcampusdormslist', function () {
    return view('offcampusdormslist');
});

Route::get('/oncampusdormslist', function () {
    return view('oncampusdormslist');
});

Route::get('/adminregistration', function () {
    return view('adminregistration');
});

Route::get('/admindormmain', function () {
    return view('admindormmain');
});

