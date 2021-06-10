@php $active = 'transportation' @endphp
@extends('layout.main')
@section('title', 'Transportation')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All Transportation info
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/transportation/create" class="btn btn-dark pull-right">Add New</a>
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
                                    <th>Plate_number</th>
                                    <th>Driver_name</th> 
                                    <th>Driver_contact</th>
                                    <th>Notes</th> 
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->plate_number}}</td> 
                                        <td>{{$x->driver_name}}</td>
                                        <td>{{$x->driver_contact}}</td> 
                                        <td>{{$x->notes}}</td>                                    
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('transportation.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('transportation.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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
