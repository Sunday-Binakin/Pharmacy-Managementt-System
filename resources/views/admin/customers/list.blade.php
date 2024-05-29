@extends('admin.layouts.app')
@section( 'content')
<div class="pagetitle">
    <h1>Customers List</h1>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('_message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ url('admin/customers/add') }}" class="btn btn-primary">Add New Customer</a>
                    </h5>
                    <table class="table datatable">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact number</th>
                            <th>Address</th>
                            <th>Doctor name</th>
                            <th> Doctor Address</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1</td>
                            <td> 2</td>
                            <td> 3</td>
                            <td> 4</td>
                            <td> 5</td>
                            <td> 6</td>
                            <td> 7</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

