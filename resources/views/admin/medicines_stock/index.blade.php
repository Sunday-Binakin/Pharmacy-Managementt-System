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
                    <h5 class="card-title">
                        <a href="{{ url('admin/medicines_stock/add')}}" class="btn btn-primary"> Add  Medicine Stock List</a>
                    </h5>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

