
@extends('backend.auth.authmaster')
@section('title')
Sign In
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
                    <h3 class="mb-2">Sign In</h3>
                    <p>Login to stay connected.</p>
                    @if(session('status'))
                    <div class="alert alert-success">
                        <p>{{session('status')}}</p>
                    </div>
                    @endif
                    @include('backend.partials.alerts')
                    @if ($message = Session::get('login_error'))
                    <p class="text-danger mb-2">Already registered this email !</p>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="floating-label form-group">
                                    <input class="floating-input form-control" name="email" type="email" placeholder=" ">
                                    <label>Email</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
