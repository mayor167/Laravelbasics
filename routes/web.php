<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return "09063676340";
});
//named route
Route::get('/test', function(){
    return "This is a test page";
})->name("testpage");