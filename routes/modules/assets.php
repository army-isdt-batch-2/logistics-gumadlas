<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetsController;

/**
 * supplier Data Lists
 */
Route::get('/assets',[ 
    App\Http\Controllers\AssetsController::class,
    'index' 
    ])->name('assets');


/** 
 * Create New assets Form
*/
Route::get('/assets/create', [ 
    App\Http\Controllers\AssetsController::class,
    'create' 
    ])->name('assets.create');


/** https://docs.google.com/presentation/d/1-0MuIQboCxLI3A1OevQQuDTDCTUoxk6N4sp0aPN_cX0/edit?usp=sharing
 * Save New assets to Database
*/
Route::post('/assets/create/save', [ 
    App\Http\Controllers\AssetsController::class,
    'save' 
    ])->name('assets.create.save');


/** 
 * Edit assets Record Form
*/
Route::get('/assets/edit/{id}', [ 
    App\Http\Controllers\AssetsController::class,
    'edit' 
    ])->name('assets.edit');


/** 
 * Update assets Record to Database
*/
Route::post('/assets/update/{id}', [ 
    App\Http\Controllers\AssetsController::class,
    'update' ])->name('assets.update');


/** 
 * Delete assets Record to Database
*/
Route::get('/assets/delete/{id}', [ 
    App\Http\Controllers\AssetsController::class,
    'delete' ])->name('assets.delete');
