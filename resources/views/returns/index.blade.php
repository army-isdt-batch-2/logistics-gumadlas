@php $active = 'returns' @endphp
@extends('layout.main')
@section('title', 'Returns')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All returns info
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/returns/create" class="btn btn-dark pull-right">Add New</a>
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
                                    <th>Asssets_id</th>
                                    <th>Returned_by</th> 
                                    <th>Returned_by_contact</th>
                                    <th>Quantity</th> 
                                    <th>Reason</th>
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->asssets_id}}</td> 
                                        <td>{{$x->returned_by}}</td>
                                        <td>{{$x->returned_by_contact}}</td> 
                                        <td>{{$x->quantity}}</td>
                                        <td>{{$x->reason}}</td> 
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('returns.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('returns.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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
