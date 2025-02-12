<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'showForm']);

Route::post('/save', [ContactController::class, 'submitForm']); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admintest', function () {
    return view('admintest');
});
