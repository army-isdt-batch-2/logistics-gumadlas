@php $active = 'distribution' @endphp
@extends('layout.main')
@section('title', 'Distribution')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All Distribution info
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/distribution/create" class="btn btn-dark pull-right">Add New</a>
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
                                    <th>Requestor name</th>
                                    <th>Requestor contact</th> 
                                    <th>Purpose</th>
                                    <th>Asset id</th> 
                                    <th>Quantity</th>
                                    <th>Status</th>

                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->requestor_name}}</td> 
                                        <td>{{$x->requestor_contact}}</td>
                                        <td>{{$x->purpose}}</td> 
                                        <td>{{$x->asset_id}}</td>
                                        <td>{{$x->quantity}}</td> 
                                        <td>{{$x->status}}</td> 
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('distribution.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('distribution.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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
