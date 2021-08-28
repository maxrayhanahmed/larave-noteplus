<x-guest-layout>
    <section class="login-content">
        <div class="container h-100">
           <div class="row justify-content-center align-items-center height-self-center">
              <div class="col-md-5 col-sm-12 col-12 align-self-center">
                 <div class="sign-user_card">
                    <div class="logo-detail">
                          <div class="d-flex align-items-center"><img src="{{asset('images/logo.png')}}" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4></div>
                    </div>  
                    <h3 class="mb-2">Sign Up</h3>
                    <p>Create your account.</p>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('register') }}" data-toggle="validator">
                        {{csrf_field()}}
                       <div class="row">
                          <div class="col-lg-6">
                             <div class="floating-label form-group">
                                <input class="floating-input form-control" type="text" name="first_name" value="{{old('first_name')}}" id="fullname" required autocomplete="off" placeholder=" ">
                                <label>Full Name <span class="text-danger">*</span></label>
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="floating-label form-group">
                                <input class="floating-input form-control" type="text" name="last_name" value="{{old('last_name')}}" id="lastname" required autocomplete="off" placeholder=" ">
                                <label>Last Name <span class="text-danger">*</span></label>
                             </div>
                          </div>
                          <div class="col-lg-12">
                             <div class="floating-label form-group">
                                <input class="floating-input form-control" type="email" name="email" value="{{old('email')}}"  required  autocomplete="off" placeholder=" ">
                                <label>Email <span class="text-danger">*</span></label>
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="floating-label form-group">
                                <input class="floating-input form-control" type="password" name="password" required autocomplete="new-password" placeholder=" ">
                                <label>Password <span class="text-danger">*</span></label>
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="floating-label form-group">
                                <input class="floating-input form-control" type="password" name="password_confirmation" required autocomplete="off" placeholder=" ">
                                <label>Confirm Password <span class="text-danger">*</span></label>
                             </div>
                          </div>
                          <div class="col-lg-12">
                             <div class="custom-control custom-checkbox mb-3 text-left">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                <label class="custom-control-label" for="customCheck1">I agree with the terms of use <span class="text-danger">*</span></label>
                             </div>
                          </div>
                       </div>
                       <button type="submit" class="btn btn-primary">{{ __('Sign Up') }}</button>
                       <p class="mt-3 mb-0">
                          Already have an Account <a href="{{route('login')}}" class="text-primary"><b>Sign In</b></a>
                       </p>
                    </form>
                 </div>
              </div>
           </div>
        </div>
    </section>
</x-guest-layout>