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
                        <a href="{{ url('admin/suppliers/add') }}" class="btn btn-primary">Add New Suppliers</a>
                    </h5>
                    <table class="table datatable">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th>Contact number</th>
                            <th>Address</th>

                            <th> created At</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($records as   $value)
                          <tr>
                            <td> {{ $value->id }}</td>
                            <td> {{ $value-> suppliers_name}}</td>
                            <td> {{ $value-> suppliers_email}}</td>
                            <td> {{ $value-> contact_number}}</td>
                            <td> {{ $value-> address}}</td>
                            <td> {{ date('d-m-Y H:i:s',strtotime($value-> created_at))}}</td>
                            <td>
                                <a href="{{ url('admin/suppliers/edit/'.$value->id) }}" class="btn btn-success">
                                    <i class="bi bi-pencil-square"></i><span> </span>
                                  </a>
                                  <a href="{{ url('admin/suppliers/delete/'.$value->id) }}" onclick="return confirm('Are you sure ?you want to delete')" class="btn btn-danger">
                                    <i class="bi bi-trash"></i><span> </span>
                                  </a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

