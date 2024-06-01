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
                    <h5 class="card-title">  Suppliers</h5>
                    <form method="POST"  action="{{ url('admin/suppliers/add') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Suppliers Name<span style="color: red;">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="suppliers_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Supplier Email<span style="color: red;">*</span></label>
                            <div class="col-sm-10">
                                <input type="numbers" class="form-control" name="suppliers_email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Supplier Number<span style="color: red;">*</span></label>
                            <div class="col-sm-10">
                                <input type="numbers" class="form-control" name="contact_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 100px" name="address"></textarea>
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

        {{--  <div class="col-lg-6">



        </div>  --}}
    </div>
</section>
@endsection

