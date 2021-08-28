<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="{{route('user.dashboard')}}" class="header-logo">
                    <img src="{{asset('/')}}images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                </a>
                @if(auth()->user()->user_type === 'admin')
{{--                 <a href="{{route('dashboard')}}" class="btn btn-success ml-3">--}}
{{--                     <h5>Admin Settings</h5>--}}
{{--                </a>--}}
                @endif
                <a href="{{route('dashboard.1')}}" class="btn btn-info ml-3">
                    <h5>Go to Static Mode</h5>
                </a>
            </div>



            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        <li class="nav-item nav-icon search-content">
                            <a href="#" class="search-toggle rounded" id="h1-dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </a>
                            <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownSearch">
                                <form action="#" class="searchbox p-2">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                        <a href="#" class="search-link"><i class="las la-search"></i></a>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown mail-content">
                            <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="">
                                    <svg width="20" class="svg-icon" id="main-n-010" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </i>
                                <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                                <span class="bg-primary"></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton2">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="px-3 pt-0 pb-0">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Emma Watson</h5>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Ashlynn Franci</h5>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Kianna Carder</h5>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown mail-content">
                            <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton004" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <i class="">
                                    <svg width="20" class="svg-icon" id="main-n-020" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                </i>
                                <span class="badge badge-primary count-mail rounded-circle">2</span>
                                <span class="bg-primary "></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton004">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="px-3 pt-0 pb-0">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Emma Watson</h5>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Ashlynn Franci</h5>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Kianna Carder</h5>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="caption-content">

                            <a href="{{route('dashboard')}}" class="iq-user-toggle d-flex align-items-center justify-content-between" id="h-dropdownMenuButton001" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(Auth::user()->image!==null)
                                    <img src="{{ asset(Auth::user()->image)}}" class="img-fluid rounded avatar-50" alt="{{ Auth::user()->name }}">

                                @else
                                    <img src="{{ Auth::user()->profile_photo_url }}" class="img-fluid rounded avatar-50" alt="{{ Auth::user()->name }}">
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right w-100 border-0 py-2" aria-labelledby="h-dropdownMenuButton001">
                                @if(auth()->user()->user_type === 'admin')
                                <a class="dropdown-item mb-2" href="{{route('dashboard')}}">
                                    <i class="las la-user-cog font-size-20 mr-1"></i>
                                    <span>Account Settings</span>
                                </a>

                                @endif
                                <a class="dropdown-item mb-3" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                    <i class="las la-user-shield font-size-20 mr-1"></i>
                                    <span>Privacy Settings</span>
                                </a>

                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                                    {{ __('Edit Profile') }}
                                </a>

                                <hr class="my-1">

                                <form method="POST" action="{{ route('logout') }}" >
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                                        {{ __('Log Out') }}
                                    </a>
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="{{route('user.dashboard')}}" class="header-logo">
            <img src="{{asset('/')}}images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4>
        </a>
        <div class="iq-menu-bt-sidebar">
            <i class="las la-times wrapper-menu"></i>
        </div>

    </div>
    <div class="sidebar-caption dropdown">
        <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('/')}}images/user/1.jpg" class="img-fluid rounded avatar-50 mr-3" alt="user">
            <div class="caption">
                <h6 class="mb-0 line-height">Bud Wiser</h6>
            </div>
            <i class="las la-angle-down"></i>
        </a>
        <div class="dropdown-menu w-100 border-0 my-2" aria-labelledby="dropdownMenuButton">

            <a class="dropdown-item mb-2" href="{{route('dashboard')}}">
                <i class="las la-user-cog font-size-20 mr-1"></i>
                <span>Account Settings</span>
            </a>
            <a class="dropdown-item mb-3" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                <i class="las la-user-shield font-size-20 mr-1"></i>
                <span>Privacy Settings</span>
            </a>
            <hr class="my-2">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                    {{ __('Log Out') }}
                </a>
            </form>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <div class="iq-search-bar device-search mb-3">
            <form action="#" class="searchbox">
                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                <input type="text" class="text search-input" placeholder="Search">
            </form>
        </div>
        <div class="sidebar-btn dropdown mb-3">
            <a href="{{route('dashboard.1')}}" class="btn btn-primary mb-2 position-relative  d-flex align-items-center justify-content-between" style="height: 40px;"><span class="btn-title">Go to Static Mode</span></a>
            <a href="#"  id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary pr-5 position-relative iq-user-toggle d-flex align-items-center justify-content-between" style="height: 40px;"><span class="btn-title"><i class="ri-add-line mr-3"></i>Add New</span><span class="note-add-btn" style="height: 40px;"><i class="las la-angle-down"></i></span></a>
            <div class="dropdown-menu w-100 border-0 py-3" aria-labelledby="dropdownMenuButton01">
                <a class="dropdown-item mb-2" href="{{route('note.index')}}">
                    <span><i class="ri-sticky-note-line mr-3"></i>Blank Notes</span>
                </a>
                <a class="dropdown-item mb-2" href="../backend/page-new-note.html?type=todo">
                    <span><i class="ri-todo-line mr-3"></i>To-do</span>
                </a>
                <a class="dropdown-item mb-2" href="../backend/page-new-note.html?type=essay">
                    <span><i class="ri-booklet-line mr-3"></i>Essay Notes</span>
                </a>
                <a class="dropdown-item" href="../backend/page-new-note.html?type=daily">
                    <span><i class="ri-donut-chart-line mr-3"></i>Daily Reflection</span>
                </a>
            </div>
        </div>
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                @if(auth()->user()->user_type === 'admin')
                <li class="{{activeroute('user/*')}}">
                    <a href="#front-user" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="">
                            <svg class="svg-icon" id="iq-user-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </i>
                        <span>User Details</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>

                    <ul id="front-user" class="iq-submenu collapse active" data-parent="#iq-sidebar-toggle">

                        <li class="{{activeRouteName('user.add.get')}}">
                            <a href="{{route('user.add.get')}}" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-user-1-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                    </svg>
                                </i><span class="">User Add</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('user.manage')}}" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-user-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                    </svg>
                                </i><span class="">User List</span>
                            </a>
                        </li>
                    </ul>




                </li>
                <li class="{{activeroute('admin/*')}}">
                    <a href="#user" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="">
                            <svg class="svg-icon" id="iq-user-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </i>
                        <span>Admin Details</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                        <li class="{{activeRouteName('admin.get')}}">
                            <a href="{{route('admin.get')}}" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-user-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                    </svg>
                                </i><span class="">Admin List</span>
                            </a>
                        </li>
                    </ul>

                </li>
                @endif

            </ul>
        </nav>

        <div class="p-3"></div>
    </div>
</div>


