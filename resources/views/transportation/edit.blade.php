@php $active = 'transportation' @endphp
@extends('layout.main')
@section('title', 'Create Transportation')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Transportation</h4>
                    </div>
                    <div class="col-12">
                         {{-- Transportation Form--}}
                         <form class =" row g-3 " action="{{ URL::route('transportation.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            {{-- Transportation Input Field --}}
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Plate_number</label>
                                <input type="text" id="transportation" class="form-control" name="plate_number" required value="{{ $data->plate_number }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Driver_name</label>
                                <input type="text" id="transportation" class="form-control" name="driver_name" required value="{{ $data->driver_name }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Driver_contact</label>
                                <input type="text" id="transportation" class="form-control" name="driver_contact" required value="{{ $data->driver_contact }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Notes</label>
                                <input type="text" id="transportation" class="form-control" name="notes" required value="{{ $data->notes }}">
                            </div> 
                                                      
                            
                            
                            {{-- End Transportation Input Field --}}
                        
                            {{-- Submit and Cancel Button --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div> {{-- End Submit and Cancel Button --}}
                            
                        </form> {{-- End Transportation Form--}}
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection