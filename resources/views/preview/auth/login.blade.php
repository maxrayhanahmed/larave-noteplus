<x-guest-layout>
    <section class="login-content">
        <div class="container h-100">
           <div class="row justify-content-center align-items-center height-self-center">
              <div class="col-md-5 col-sm-12 col-12 align-self-center">
                 <div class="sign-user_card">   
                    <div class="logo-detail">
                          <div class="d-flex align-items-center"><img src="{{asset('images/logo.png')}}" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4></div>
                    </div>      
                    <h3 class="mb-2">Sign In</h3>
                    <p>Login to stay connected.</p>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('login') }}" data-toggle="validator">
                        {{csrf_field()}}
                       <div class="row">
                          <div class="col-lg-12">
                             <div class="floating-label form-group">
                                <input class="floating-input form-control"  type="email" name="email" value="{{old('email')}}" required autocomplete="off" autofocus placeholder=" ">
                                <label>Email<span class="text-danger">*</span></label>
                             </div>
                          </div>
                          <div class="col-lg-12">
                             <div class="floating-label form-group">
                                <input class="floating-input form-control" type="password" name="password" required autocomplete="current-password" placeholder=" ">
                                <label>Password<span class="text-danger">*</span></label>
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="custom-control custom-checkbox mb-3 text-left">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                <label class="custom-control-label" for="customCheck1">Remember Me</label>
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <a href="{{route('password.request')}}" class="text-primary float-right">Forgot Password?</a>
                          </div>
                       </div>
                       <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button>
                       <p class="mt-3 mb-0">
                          Create an Account <a href="{{route('register')}}" class="text-primary"><b>Sign Up</b></a>
                       </p>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </section>
</x-guest-layout>