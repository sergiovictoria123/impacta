<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/projects', function () {
    return view('projects');
})->name('projects');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactsController::class, 'store'])->name('contacts.store');