<?php

use Illuminate\Support\Facades\Route;


Route::get('/',               'FormationController@accueil')->name('accueil');

Route::get('/produits',       'FormationController@produit')->name('produits');

Route::get('/services',       'FormationController@service')->name('services');

Route::get('/contactez-nous', 'FormationController@contact')->name('contact');
