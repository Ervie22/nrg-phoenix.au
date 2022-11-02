<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/team', function () {
    return view('team');
})->name('team');
Route::get('/ai', function () {
    return view('ai');
})->name('ai');
Route::get('/dm', function () {
    return view('dm');
})->name('dm');
Route::get('/web', function () {
    return view('web');
})->name('web');
Route::get('/mobile', function () {
    return view('mobile');
})->name('mobile');
Route::get('/ecom', function () {
    return view('ecom');
})->name('ecom');
Route::get('/it', function () {
    return view('it');
})->name('it');
Route::get('/crm', function () {
    return view('crm');
})->name('crm');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/bdms', function () {
    return view('bdms');
})->name('bdms');
Route::get('/bweb', function () {
    return view('bweb');
})->name('bweb');
Route::get('/bapp', function () {
    return view('bapp');
})->name('bapp');
Route::get('/bbeacon', function () {
    return view('bbeacon');
})->name('bbeacon');
Route::get('/bbots', function () {
    return view('bbots');
})->name('bbots');
Route::get('/bfiveg', function () {
    return view('bfiveg');
})->name('bfiveg');
Route::get('/bdm', function () {
    return view('bdm');
})->name('bdm');
Route::get('/bai', function () {
    return view('bai');
})->name('bai');
Route::get('/brevolve', function () {
    return view('brevolve');
})->name('brevolve');
Route::get('/bprocess', function () {
    return view('bprocess');
})->name('bprocess');

