<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/view', function () {
    return view('myview');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    return view('home');

});Route::get('/about', function () {
    return view('about');
});