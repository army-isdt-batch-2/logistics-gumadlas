<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Returns;

//facade
use Redirect;

class ReturnsController extends Controller
{
    //declare variable
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * returns Data Lists
     */
    public function index()
    {
        return view ('returns.index')->with([
            'data' => Returns::all()
        ]);
    }


    /** 
     * Create New returns Form
    */
    public function create()
    {
        return view ('returns.create');
    }


    /** 
     * Save New returns to Database
    */
    public function save()
    {
        Returns::create($this->request->except('_token'));

        # Redirect to returns list with success message
        return Redirect::route('returns')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit returns Record Form
    */
    public function edit($id){

        return view ('returns.edit')->with([
            'data' => Returns::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update returns Record to Database
    */
    public function update($id){
        # Find record with the parameter $id and update the record
        Returns::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to returns list with success message
        return Redirect::route('returns')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete returns Record to Database
    */
    public function delete($id){
        # Destory Record
        Returns::destroy($id);

        # Redirect to returns list with success message
        return Redirect::route('returns')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}