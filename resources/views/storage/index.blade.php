@php $active = 'storage' @endphp
@extends('layout.main')
@section('title', 'Storage')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All Storage info
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/storage/create" class="btn btn-dark pull-right">Add New</a>
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
                                    <th>Name</th>
                                    <th>Building</th> 
                                    <th>Floor</th>
                                    <th>Room</th> 
                                    <th>Cabinet</th>
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->name}}</td> 
                                        <td>{{$x->building}}</td>
                                        <td>{{$x->floor}}</td> 
                                        <td>{{$x->room}}</td>
                                        <td>{{$x->cabinet}}</td> 
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('storage.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('storage.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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
