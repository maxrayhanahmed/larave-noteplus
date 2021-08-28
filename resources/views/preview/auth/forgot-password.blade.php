<x-guest-layout>
   <section class="login-content">
      <div class="container h-100">
         <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-5 col-sm-12 col-12 align-self-center">
               <div class="sign-user_card">
                  <div class="logo-detail">
                        <div class="d-flex align-items-center"><img src="{{asset('images/logo.png')}}" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4></div>
                  </div>  
                  <h3 class="mb-2">Reset Password</h3>
                  <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
                  <form action="{{ route('login') }}" data-toggle="validator">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="floating-label form-group">
                              <input class="floating-input form-control" name="email" id="email" type="email" required autofocus="off" placeholder=" ">
                              <label>Email <span class="text-danger">*</span></label>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</x-guest-layout>