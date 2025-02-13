<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AjaxController;

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

Route::get('/addNewBook', [BooksController::class, 'loadBookEntryPage']);
Route::post('/saveBookDetails', [BooksController::class, 'saveBookDetails']);
Route::post('/saveBookDetailsUsingLaravelValidation', [BooksController::class, 'saveBookDetailsUsingLaravelValidation']);

Route::get('/ajaxCombo', [AjaxController::class, 'loadAjaxComboPage']);
Route::get('/getAllBlocks/{district}', [AjaxController::class, 'loadBlocks']);
