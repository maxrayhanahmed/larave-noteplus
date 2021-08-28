<x-guest-layout>
    <section class="login-content">
        <div class="container-fluid h-100">
           <div class="row justify-content-center align-items-center height-self-center">
              <div class="col-md-5 col-sm-12 col-12 align-self-center">
                 <div class="sign-user_card">
                    <div class="logo-detail">
                          <div class="d-flex align-items-center"><img src="{{asset('images/logo.png')}}" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4></div>
                    </div> 
                    <h3 class="mb-2">Success !</h3>
                    <p class="cnf-mail m-auto mb-1">A email has been send to youremail@domain.com. Please check for an
                       email from company and click
                       on the included link to reset your password.</p>
                    <div class="d-inline-block w-100">
                       <a href="{{route('dashboard.1')}}" class="btn btn-primary mt-3">Back to Home<a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
</x-guest-layout>