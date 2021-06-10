<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportationController;

/**
 * deliveries Data Lists
 */
Route::get('/transportation',[ 
    App\Http\Controllers\TransportationController::class,
    'index' 
    ])->name('transportation');


/** 
 * Create New transportation Form
*/
Route::get('/transportation/create',[ 
    App\Http\Controllers\TransportationController::class,
    'create' 
    ])->name('transportation.create');


/** https://docs.google.com/presentation/d/1-0MuIQboCxLI3A1OevQQuDTDCTUoxk6N4sp0aPN_cX0/edit?usp=sharing
 * Save New deliveries to Database
*/
Route::post('/transportation/create/save', [ 
    App\Http\Controllers\TransportationController::class,
    'save' 
    ])->name('transportation.create.save');


/** 
 * Edit transportation Record Form
*/
Route::get('/transportation/edit/{id}', [ 
    App\Http\Controllers\TransportationController::class,
    'edit' 
    ])->name('transportation.edit');


/** 
 * Update transportation Record to Database
*/
Route::post('/transportation/update/{id}', [ 
    App\Http\Controllers\TransportationController::class,
    'update' 
    ])->name('transportation.update');


/** 
 * Delete transportation Record to Database
*/
Route::get('/transportation/delete/{id}', [ 
    App\Http\Controllers\TransportationController::class,
    'delete' 
    ])->name('transportation.delete');
