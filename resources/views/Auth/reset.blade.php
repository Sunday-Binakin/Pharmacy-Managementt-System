@extends('Layout.app')

@section('content')
{{-- login starts  --}}
<div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">
            @include('_message')
            <h5 class="card-title text-center pb-0 fs-4">Reset password</h5>
            {{--  <p class="text-center small">Enter your username & password to login</p>  --}}
        </div>

        <form  method ="post" action="{{ url('reset/'.$token) }}" class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="col-12">
                <label   class="form-label"><strong> Password</strong></label>
                <input type="password" name="password" class="form-control"   required value="{{ old('password') }}">
                <span style ="color:red;">{{ $errors->first('password') }}</span>
                <div class="invalid-feedback">enter new  Password!</div>
            </div>
            <div class="col-12">
                <label   class="form-label"><strong> Confirm Password</strong></label>
                <input type="password" name="confirm_password" class="form-control"   required>
                <span style ="color:red;>{{ $errors->first('confirm_password') }}</span>
                <div class="invalid-feedback">enter new  Password Again!</div>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                    <label class="form-check-label" for="rememberMe"><strong> Remember me</strong></label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </div>
            <div class="col-12">
                <p class="small mb-0">Forgot Password? <a href="{{ url('forgot') }}">Forgot
                        account</a></p>
            </div>
        </form>

    </div>
</div>
{{-- login ends  --}}


@endsection

