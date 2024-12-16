<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting', function () {
    return view('tes');
});
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/CO', function () {
    return view('checkout');
});
Route::get('/collection', function () {
    return view('collection');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/sale', function () {
    return view('sale');
});