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
                    <h5 class="card-title">Edit Medicine</h5>
                {{--  </div>  --}}
                <form method="POST" action="{{ url('admin/medicines/edit/'.$records->id) }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Medicine Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="{{ $records->name  }}">
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Packing<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="packing" value="{{ $records->packing }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Generic Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="generic_name" value="{{ $records->generic_name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Supplier Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="supplier_name" value="{{ $records->supplier_name }}">
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
</section>

@endsection
