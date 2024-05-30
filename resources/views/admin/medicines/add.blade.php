@extends('admin.layouts.app')
@section( 'content')
<div class="pagetitle">
    <h1>{{ $page_title }}</h1>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('_message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ url('admin/medicines/add') }}" class="btn btn-primary">Add Medicines</a>
                    </h5>
                </div>
                <form method="POST"  action="">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>

                    </div> <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
