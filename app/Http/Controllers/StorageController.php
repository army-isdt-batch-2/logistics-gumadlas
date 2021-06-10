<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;

//facade
use Redirect;

class StorageController extends Controller
{
    //declare variable
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * Storage Data Lists
     */
    public function index()
    {
        return view ('storage.index')->with([
            'data' => Storage::all()
        ]);
    }


    /** 
     * Create New storage Form
    */
    public function create()
    {
        return view ('storage.create');
    }


    /** 
     * Save New Storage to Database
    */
    public function save()
    {
        Storage::create($this->request->except('_token'));

        # Redirect to Storage list with success message
        return Redirect::route('storage')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit Storage Record Form
    */
    public function edit($id){

        return view ('storage.edit')->with([
            'data' => Storage::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update Storage Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Storage::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to Storage list with success message
        return Redirect::route('storage')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete Storage Record to Database
    */
    public function delete($id){
        # Destory Record
        Storage::destroy($id);

        # Redirect to Storage list with success message
        return Redirect::route('storage')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}