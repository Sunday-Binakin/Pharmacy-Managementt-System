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
                        {{--  <h5 href="{{ url('admin/medicines/add') }}" class="btn btn-primary">Add Medicines</h5>  --}}
                        <h5><strong>Add Medicines</strong></h5>
                        @include('admin.medicines._form')
                    </div>


                </div>
            </div>
        </div>

    </div>

</section>
@endsection

