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
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Packing</th>
                                <th>Generic Name</th>
                                <th>Supplier Name</th>
                                <th> created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($records as $value)
                            <tr>
                                <td> {{ $value->id }}</td>
                                <td> {{ $value-> name}}</td>
                                <td> {{ $value-> packing}}</td>
                                <td> {{ $value-> generic_name}}</td>
                                <td> {{ $value-> supplier_name}}</td>

                                <td> {{ date('d-m-Y H:i:s',strtotime($value-> created_at))}}</td>
                                <td>
                                    <a href="{{ url('admin/medicines/edit/'.$value->id) }}" class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i><span> </span>
                                    </a>
                                    <a href="{{ url('admin/medicines/delete/'.$value->id) }}" onclick="return confirm('Are you sure ?you want to delete')" class="btn btn-danger">
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

