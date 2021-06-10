@php $active = 'assets' @endphp
@extends('layout.main')
@section('title', 'Assets')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All Assets info
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/assets/create" class="btn btn-dark pull-right">Add New</a>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-12 mt-5">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success')}}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th> 
                                    <th>Category</th>
                                    <th>Supplier_id</th> 
                                    <th>Storage_id</th>
                                    <th>Total_stocks</th>

                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->id}}</td> 
                                        <td>{{$x->name}}</td> 
                                        <td>{{$x->description}}</td>
                                        <td>{{$x->category}}</td> 
                                        <td>{{$x->supplier_id}}</td>
                                        <td>{{$x->storage_id}}</td> 
                                        <td>{{$x->total_stocks}}</td> 
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('assets.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('assets.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
                                        </td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection
