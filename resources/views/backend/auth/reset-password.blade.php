
@extends('backend.auth.authmaster')
@section('title')
    Reset Password
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
                        <h3 class="mb-2">Reset Password</h3>
                        <p>Login to stay connected.</p>

                        @include('backend.partials.alerts')
                        @if ($message = Session::get('login_error'))
                            <p class="text-danger mb-2">Already registered this email !</p>
                        @endif
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" value="{{$email ?? old('email')}}" name="email" type="email" placeholder=" ">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="password" type="password" placeholder=" ">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="password_confirmation" type="password" placeholder=" ">
                                        <label>Confirm Password</label>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
