<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReturnsController;

/**
 * supplier Data Lists
 */
Route::get('/returns',[ 
    App\Http\Controllers\ReturnsController::class,
    'index' 
    ])->name('returns');


/** 
 * Create New returns Form
*/
Route::get('/returns/create', [ 
    App\Http\Controllers\ReturnsController::class,
    'create' 
    ])->name('returns.create');


/** https://docs.google.com/presentation/d/1-0MuIQboCxLI3A1OevQQuDTDCTUoxk6N4sp0aPN_cX0/edit?usp=sharing
 * Save New returns to Database
*/
Route::post('/returns/create/save', [ 
    App\Http\Controllers\ReturnsController::class,
    'save' 
    ])->name('returns.create.save');


/** 
 * Edit returns Record Form
*/
Route::get('/returns/edit/{id}', [ 
    App\Http\Controllers\ReturnsController::class,
    'edit' 
    ])->name('returns.edit');


/** 
 * Update returns Record to Database
*/
Route::post('/returns/update/{id}', [ 
    App\Http\Controllers\ReturnsController::class,
    'update' 
    ])->name('returns.update');


/** 
 * Delete returns Record to Database
*/
Route::get('/returns/delete/{id}', [ 
    App\Http\Controllers\ReturnsController::class,
    'delete' 
    ])->name('returns.delete');
