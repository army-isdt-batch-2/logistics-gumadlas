@php $active = 'returns' @endphp
@extends('layout.main')
@section('title', 'Create Returns')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Returns</h4>
                    </div>
                    <div class="col-12">
                         {{-- Returns Form--}}
                         <form class =" row g-3 " action="{{ URL::route('returns.create.save') }}" method="post">
                            @csrf

                            {{-- Returns Input Field --}}
                            <div class="col-md-12">
                                <label for="returns" class="form-label">Asssets_id</label>
                                <input type="number" id="returns" class="form-control" name="asssets_id" value="{{ old('asssets_id') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="returns" class="form-label">Returned_by</label>
                                <input type="text" id="returns" class="form-control" name="returned_by" value="{{ old('returned_by') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="returns" class="form-label">Returned_by_contact</label>
                                <input type="text" id="returns" class="form-control" name="returned_by_contact" value="{{ old('returned_by_contact') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="returns" class="form-label">Quantity</label>
                                <input type="number" id="returns" class="form-control" name="quantity" value="{{ old('quantity') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="returns" class="form-label">Reason</label>
                                <input type="text" id="returns" class="form-control" name="reason" value="{{ old('reason') }}" required>
                            </div> 
                            
                            
                            {{-- End Returns Input Field --}}
                        
                            {{-- Submit and Cancel Button --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div> {{-- End Submit and Cancel Button --}}
                            
                        </form> {{-- End Returns Form--}}
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection