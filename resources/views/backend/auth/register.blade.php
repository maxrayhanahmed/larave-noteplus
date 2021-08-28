
@extends('backend.auth.authmaster')
@section('title')
    Sign Up
@endsection
@section('content')
    <section class="login-content">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
                <div class="col-md-5 col-sm-12 col-12 align-self-center">
                    <div class="sign-user_card">
                        <div class="logo-detail">
                            <div class="d-flex align-items-center"><img src="{{asset('backend')}}/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4></div>
                        </div>
                        <h3 class="mb-2">Sign Up</h3>
                        <p>Create your  account.</p>
                        @include('backend.partials.alerts')
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="first_name" type="text" placeholder=" ">
                                        <label>Full Name</label>
                                        <span class="text-danger">{{$errors->first('first_name')}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="last_name" type="text" placeholder=" ">
                                        <label>Last Name</label>
                                        <span class="text-danger">{{$errors->first('last_name')}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="email" type="email" placeholder=" ">
                                        <label>Email</label>
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="password" type="password" placeholder=" ">
                                        <label>Password</label>
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="password_confirmation" type="password" placeholder=" ">
                                        <label>Confirm Password</label>
                                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                                    </div>
                                </div>
{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="custom-control custom-checkbox mb-3 text-left">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                        <label class="custom-control-label" for="customCheck1">I agree with the terms of use</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Sign Up</button>
                            <p>or</p>
                            <div class="col-md-12">
                                <a href="{{route('google.redirect')}}" type="button" class="btn btn-default btn-block rounded-pill mt-2 btn-outline-primary"><i class="fab fa-google"></i> Continue with Google</a>
                                <a href="{{route('facebook.redirect')}}" type="button" class="btn btn-info btn-block rounded-pill btn-outline-primary"><i class="fab fa-facebook"></i> Continue with facebook</a>
                                <a href="" type="button" class="btn btn-primary btn-block rounded-pill btn-outline-default"><i class="fab fa-apple"></i> Continue with Apple</a>
                            </div>
                            <p class="mt-3 mb-0">
                                Already have an Account <a href="{{route('login')}}" class="text-primary"><b>Sign In</b></a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
