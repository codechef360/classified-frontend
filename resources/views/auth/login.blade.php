@extends('layouts.master-layout')

@section('title')
    Signin
@endsection

@section('current-page')
    Signin
@endsection

@section('main-content')
<div class="sign-in-page">
    <div class="row">
        <div class="col-md-6 col-sm-6 sign-in">
        <h4 class="">Sign in</h4>
        <p class="">Hello, Welcome to your account.</p>

        <div class="social-sign-in outer-top-xs">
        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
        </div>
        <form class="register-form outer-top-xs" role="form" action="{{route('login')}}" method="post">
            @csrf
        <div class="form-group">
            <label class="info-title" for="">Email Address <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" value="{{old('email')}}" name="email" placeholder="Email address" >
            @error('email')
                <i class="text-danger">{{$message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="">Password <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" placeholder="Password" name="password" >
        </div>
        <div class="radio outer-xs">
            <label>
                <input type="checkbox" name="remember_me" > Remember me
            </label>
            <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
        </form>
        </div>
        <div class="col-md-6 col-sm-6 create-new-account">
        <h4 class="checkout-subtitle">Create an account</h4>
        <p class="text title-tag-line">Create your new account.</p>
        @if (session()->has('success'))
            <div class="alert alert-success">{!! session()->get('success') !!}</div>
        @endif
        <form class="register-form outer-top-xs" role="form" action="{{route('register')}}" method="post">
            @csrf
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" name="email" placeholder="Email address" >
            @error('email')
                <i class="text-danger">{{$message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="">First Name <span>*</span></label>
            <input type="text" class="form-control unicase-form-control text-input" placeholder="First Name" name="first_name">
            @error('first_name')
                <i class="text-danger">{{$message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="">Surame <small>(Optional)</small></label>
            <input type="text" class="form-control unicase-form-control text-input" placeholder="Surname" name="surname">
            @error('surname')
                <i class="text-danger">{{$message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="">Phone Number <span>*</span></label>
            <input type="text" name="phone_no" class="form-control unicase-form-control text-input" placeholder="Phone Number" >
            @error('phone_no')
                <i class="text-danger">{{$message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="">Password <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" placeholder="Password" name="password">
            @error('password')
                <i class="text-danger">{{$message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="">Re-type Password <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" placeholder="Re-type Password" name="password_confirmation">
        </div>
        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Register</button>
        </div>
        </form>
        </div>
    </div>
</div>

@endsection
