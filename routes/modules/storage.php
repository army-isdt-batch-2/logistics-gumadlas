<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorageController;

/**
 * supplier Data Lists
 */
Route::get('/storage',[ 
    App\Http\Controllers\StorageController::class,
    'index' 
    ])->name('storage');


/** 
 * Create New Storage Form
*/
Route::get('/storage/create', [ 
    App\Http\Controllers\StorageController::class,
    'create' 
    ])->name('storage.create');


/** https://docs.google.com/presentation/d/1-0MuIQboCxLI3A1OevQQuDTDCTUoxk6N4sp0aPN_cX0/edit?usp=sharing
 * Save New supplier to Database
*/
Route::post('/storage/create/save', [ 
    App\Http\Controllers\StorageController::class,
    'save' 
    ])->name('storage.create.save');


/** 
 * Edit Storage Record Form
*/
Route::get('/storage/edit/{id}', [ 
    App\Http\Controllers\StorageController::class,
    'edit' 
    ])->name('storage.edit');


/** 
 * Update Storage Record to Database
*/
Route::post('/storage/update/{id}', [ 
    App\Http\Controllers\StorageController::class,
    'update' ])->name('storage.update');


/** 
 * Delete Storage Record to Database
*/
Route::get('/storage/delete/{id}', [ 
    App\Http\Controllers\StorageController::class,
    'delete' ])->name('storage.delete');
