<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view(('layouts.home'));
})->name('home');
Route::get('/menu', function(){
    return view(('pages.menu'));
})->name('menu');
Route::get('/about',function(){
    return view('pages.about');
})->name('about');
Route::get('/reservation',function(){
    return view('pages.reservation');
})->name('reservation');

Route::get('/contact',function(){
    return view('pages.contact');
})->name('contact');
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
