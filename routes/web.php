<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\contactController;
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/experience',function (){
    return view('experience');
})->name('experience');
Route::get('/service',[serviceController::class,'show'])->name('service');
Route::get('/contact',[contactController::class,'show'])->name('contact');