@php $active = 'deliveries' @endphp
@extends('layout.main')
@section('title', 'Create Deliveries')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Deliveries</h4>
                    </div>
                    <div class="col-12">
                         {{-- Deliveries Form--}}
                         <form class =" row g-3 " action="{{ URL::route('deliveries.create.save') }}" method="post">
                            @csrf

                            {{-- Deliveries Input Field --}}
                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Distribution_id</label>
                                <input type="number" id="deliveries" class="form-control" name="distribution_id" value="{{ old('distribution_id') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Transformation_id</label>
                                <input type="number" id="deliveries" class="form-control" name="transformation_id" value="{{ old('transformation_id') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Date_distibuted</label>
                                <input type="date" id="deliveries" class="form-control" name="date_distibuted" value="{{ old('date_distibuted') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Status</label>
                                <select class="form-control" name="status" value="{{ old('status') }}" required>
                                    <option selected>choose....</option>
                                       <option value="delivered">delivered</option>
                                       <option value="returned">returned</option>
                                 </select>
                            </div> 
                                                    
                            
                            {{-- End Deliveries Input Field --}}
                        
                            {{-- Submit and Cancel Button --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div> {{-- End Submit and Cancel Button --}}
                            
                        </form> {{-- End Deliveries Form--}}
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection