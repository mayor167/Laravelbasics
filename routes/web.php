<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return "09063676340";
});
Route::get('/portifolio', function(){
    return view('portifolio');
});
//parameter using route
Route::get('/portifolio/{firstname}/{lastname}', function ($firstname, $lastname){
    // return view('portifolio');
    return "{$firstname}  {$lastname}";
});
//named route
Route::get('/test', function(){
    return "This is a test page";
})->name("testpage");

//grouped route
Route::prefix('portifolio')->group(function(){
    Route::get('/company', function(){
        return view('company');
    });
    Route::get('/about-us', function(){
        return view('about-us');
    });
});
