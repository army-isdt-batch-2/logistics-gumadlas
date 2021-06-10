<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

/**
 * supplier Data Lists
 */
Route::get('/supplier',[ 
    App\Http\Controllers\SupplierController::class,
    'index' 
    ])->name('supplier');


/** 
 * Create New supplier Form
*/
Route::get('/supplier/create', [ 
    App\Http\Controllers\SupplierController::class,
    'create' 
    ])->name('supplier.create');


/** https://docs.google.com/presentation/d/1-0MuIQboCxLI3A1OevQQuDTDCTUoxk6N4sp0aPN_cX0/edit?usp=sharing
 * Save New supplier to Database
*/
Route::post('/supplier/create/save', [ 
    App\Http\Controllers\SupplierController::class,
    'save' 
    ])->name('supplier.create.save');


/** 
 * Edit supplier Record Form
*/
Route::get('/supplier/edit/{id}', [ 
    App\Http\Controllers\SupplierController::class,
    'edit' 
    ])->name('supplier.edit');


/** 
 * Update supplier Record to Database
*/
Route::post('/supplier/update/{id}', [ 
    App\Http\Controllers\SupplierController::class,
    'update' ])->name('supplier.update');


/** 
 * Delete supplier Record to Database
*/
Route::get('/supplier/delete/{id}', [ 
    App\Http\Controllers\SupplierController::class,
    'delete' ])->name('supplier.delete');
