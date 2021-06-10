<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveriesController;

/**
 * deliveries Data Lists
 */
Route::get('/deliveries',[ 
    App\Http\Controllers\DeliveriesController::class,
    'index' 
    ])->name('deliveries');


/** 
 * Create New deliveries Form
*/
Route::get('/deliveries/create',[ 
    App\Http\Controllers\DeliveriesController::class,
    'create' 
    ])->name('deliveries.create');


/** https://docs.google.com/presentation/d/1-0MuIQboCxLI3A1OevQQuDTDCTUoxk6N4sp0aPN_cX0/edit?usp=sharing
 * Save New deliveries to Database
*/
Route::post('/deliveries/create/save', [ 
    App\Http\Controllers\DeliveriesController::class,
    'save' 
    ])->name('deliveries.create.save');


/** 
 * Edit deliveries Record Form
*/
Route::get('/deliveries/edit/{id}', [ 
    App\Http\Controllers\DeliveriesController::class,
    'edit' 
    ])->name('deliveries.edit');


/** 
 * Update deliveries Record to Database
*/
Route::post('/deliveries/update/{id}', [ 
    App\Http\Controllers\DeliveriesController::class,
    'update' ])->name('deliveries.update');


/** 
 * Delete deliveries Record to Database
*/
Route::get('/deliveries/delete/{id}', [ 
    App\Http\Controllers\DeliveriesController::class,
    'delete' ])->name('deliveries.delete');
