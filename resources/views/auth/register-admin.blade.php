@extends('layouts.template-auth')
@section('content')
<div class="register-box">
<div class="register-logo">
    <a href="{{route('register')}}">Register Admin</a>
</div>

<div class="card">
<div class="card-body register-card-body">
    <p class="login-box-msg">Register a new Admin Account</p>
    
    <form action="{{route('register')}}" method="post">
    @csrf
    <div class="form-group d-none">
        <select class="form-control" name="level_id">
            <option value="2">2</option>
        </select>
    </div>

    @error('name')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <div class="input-group mb-3">
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    @error('email')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <div class="input-group mb-3">
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    @error('password')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <div class="input-group mb-3">
        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input name="password_confirmation" type="password" class="form-control" placeholder="Retype password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        @error('terms')
            <div class="text-danger">
                {{$message}}
            </div>
        @enderror
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                    I agree to the <a href="#">terms</a>
                </label>
            </div>
        </div>
        <!-- /.col -->
    <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </div>
    <!-- /.col -->
    </div>
    </form>
@endsection
@section('relog')
<p class="my-2">
    <a href="{{route('login')}}" class="text-center">Login if you already have Admin Account</a>
</p>
<p class="mb-0">    
    <a href="{{route('home')}}" class="text-center">Back to Home</a>
</p>
@endsection