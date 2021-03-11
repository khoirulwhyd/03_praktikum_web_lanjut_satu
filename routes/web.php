<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

//home
Route::get('/home', function () {
    return view('home', ['banjaristudio' => 'BanjariHero']);
});

//product
Route::prefix('product')->group(function(){
    Route::get('/',[App\Http\Controllers\productController::class,'product']);
});

//news
Route::get('/news/{id}',[App\Http\Controllers\newsController::class,'news']);

//program
Route::prefix('program')->group(function(){
    Route::get('/',[App\Http\Controllers\programController::class,'program']);
});

//Aboutus
Route::get('/aboutus', function(){
    return view('aboutus', ['aboutus'=> 'Kami Berdiri Sejak 2019']);
});

//ContactUS
Route::resource('contact' ,contactController::class);