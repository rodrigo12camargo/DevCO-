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

Route::get('', function () {
    return view('template/index');
});

/*Route::get('about', function () {
    return view('template/about');
});

Route::get('contact', function () {
    return view('template/contact');
});

Route::get('service', function () {
    return view('template/service');
});

Route::get('portfolio', function () {
    return view('template/project');
});

Route::get('team', function () {
    return view('template/team');
});

Route::get('testimonial', function () {
    return view('template/testimonial');
});

Route::get('feature', function () {
    return view('template/featrure');
});

Route::get('404', function () {
    return view('template/404');
});*/


