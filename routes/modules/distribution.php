<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistributionController;

/**
 * supplier Data Lists
 */
Route::get('/distribution',[ 
    App\Http\Controllers\DistributionController::class,
    'index' 
    ])->name('distribution');


/** 
 * Create New assets Form
*/
Route::get('/distribution/create', [ 
    App\Http\Controllers\DistributionController::class,
    'create' 
    ])->name('distribution.create');


/** https://docs.google.com/presentation/d/1-0MuIQboCxLI3A1OevQQuDTDCTUoxk6N4sp0aPN_cX0/edit?usp=sharing
 * Save New distribution to Database
*/
Route::post('/distribution/create/save', [ 
    App\Http\Controllers\DistributionController::class,
    'save' 
    ])->name('distribution.create.save');


/** 
 * Edit distribution Record Form
*/
Route::get('/distribution/edit/{id}', [ 
    App\Http\Controllers\DistributionController::class,
    'edit' 
    ])->name('distribution.edit');


/** 
 * Update distribution Record to Database
*/
Route::post('/distribution/update/{id}', [ 
    App\Http\Controllers\DistributionController::class,
    'update' 
    ])->name('distribution.update');


/** 
 * Delete distribution Record to Database
*/
Route::get('/distribution/delete/{id}', [ 
    App\Http\Controllers\DistributionController::class,
    'delete' 
    ])->name('distribution.delete');
