@php $active = 'deliveries' @endphp
@extends('layout.main')
@section('title', 'Deliveries')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All Deliveries info
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/deliveries/create" class="btn btn-dark pull-right">Add New</a>
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
                                    <th>Distribution_id</th>
                                    <th>Transformation_id</th> 
                                    <th>Date_distibuted</th>
                                    <th>Status</th> 

                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->id}}</td> 
                                        <td>{{$x->distribution_id}}</td> 
                                        <td>{{$x->transformation_id}}</td>
                                        <td>{{$x->date_distibuted}}</td> 
                                        <td>{{$x->status}}</td>

                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('deliveries.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('deliveries.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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
