<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/iit-neet-11th-12th', function () {
    return view('Team2');
});

Route::get('/courses', function () {
    return view('courses');
});
Route::get('/contact', function () {
    return view('contact');
});

