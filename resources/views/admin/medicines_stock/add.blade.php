@extends('admin.layouts.app')
@section( 'content')
<div class="pagetitle">
    <h1>{{ $page_title }}</h1>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                @include('_message')
                <div class="card-body">
                    <div class="card-title">
                        {{-- <h5 href="{{ url('admin/medicines/add') }}" class="btn btn-primary">Add Medicines</h5> --}}
                        {{-- <h5><strong>Add Medicines</strong></h5>  --}}
                        <form method="POST" action="">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Medicines Name<span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="medcines_id" required>
                                        <option value="">Select medicine Name</option>
                                        @foreach($records as $key => $value)
                                        <option value="{{ $value->id }}">{{$value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Batch Id<span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text " class="form-control" name="batch_id" value="{{ old('batch_id') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Expiry Date <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="expiry_date" value="{{ old('expiry_date') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Quantity<span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="quantity" value="{{ old('quantity') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Mrp<span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="mrp" value="{{ old('mrp') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Rate<span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="rate" value="{{ old('rate') }}">
                                </div>
                            </div>


                            <div class="d-flex justify-content-center align-items-center">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>


                    </div>


                </div>
            </div>
        </div>

    </div>

</section>
@endsection

