<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.accueil');
})->name('accueil');

Route::get('/produits', function () {
    return view('pages.produits');
})->name('produits');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contactez-nous', function () {
    return view('pages.contact');
})->name('contact');
