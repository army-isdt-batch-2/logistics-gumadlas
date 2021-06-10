<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliveries;

//facade
use Redirect;

class DeliveriesController extends Controller
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
        return view ('deliveries.index')->with([
            'data' => Deliveries::all()
        ]);
    }


    /** 
     * Create New distribution Form
    */
    public function create()
    {
        return view ('deliveries.create');
    }


    /** 
     * Save New Storage to Database
    */
    public function save()
    {
        Deliveries::create($this->request->except('_token'));

        # Redirect to Storage list with success message
        return Redirect::route('deliveries')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit Storage Record Form
    */
    public function edit($id){

        return view ('deliveries.edit')->with([
            'data' => Deliveries::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update deliveries Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Deliveries::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to deliveries list with success message
        return Redirect::route('deliveries')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete deliveries Record to Database
    */
    public function delete($id){
        # Destory Record
        Deliveries::destroy($id);

        # Redirect to deliveries list with success message
        return Redirect::route('deliveries')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}