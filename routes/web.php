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


Route::get('/', 'Home@home')->name('user.home');
Route::get('/about', 'About@about')->name('user.about');
Route::get('/contact', 'Contact@contact')->name('user.contact');
Route::get('/details', 'Details@details')->name('user.details');
Route::get('/blogs', 'Blog@blog')->name('user.blog');
Route::get('/blogs/details', 'Blog@blog_details')->name('user.blog_details');


