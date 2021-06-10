@php $active = 'distribution' @endphp
@extends('layout.main')
@section('title', 'Create Distribution')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Distribution</h4>
                    </div>
                    <div class="col-12">
                         {{-- Distribution Form--}}
                         <form class =" row g-3 " action="{{ URL::route('distribution.create.save') }}" method="post">
                            @csrf

                            {{-- Distribution Input Field --}}
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Requestor_Name</label>
                                <input type="text" id="distribution" class="form-control" name="requestor_name" value="{{ old('requestor_name') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Requestor_Contact</label>
                                <input type="number" id="distribution" class="form-control" name="requestor_contact" value="{{ old('requestor_contact') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Purpose</label>
                                <input type="text" id="distribution" class="form-control" name="purpose" value="{{ old('purpose') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Asset_id</label>
                                <input type="number" id="distribution" class="form-control" name="asset_id" value="{{ old('asset_id') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Quantity</label>
                                <input type="number" id="distribution" class="form-control" name="quantity" value="{{ old('quantity') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Status</label>
                                <select class="form-control" name="status" value="{{ old('status') }}" required>
                                    <option selected>choose....</option>
                                       <option value="processing">proccesing</option>
                                       <option value="declined">declined</option>
                                       <option value="distributed">distributed</option>
                                 </select>
                            </div> 
                            
                            {{-- End Distribution Input Field --}}
                        
                            {{-- Submit and Cancel Button --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div> {{-- End Submit and Cancel Button --}}
                            
                        </form> {{-- End Distribution Form--}}
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection