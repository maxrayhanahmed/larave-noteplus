<x-app-layout>
    <div class="container-fluid">        
        <div class="desktop-header">
            <div class="card card-block topnav-left">
                <div class="card-body write-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>Your Delete Items</h4>
                        <a href="#" class="btn btn-outline-primary add-btn shadow-none" data-toggle="modal" data-target="#delete-btn">Empty Bin</a>
                    </div>
                </div>
            </div>
            <div class="card topnav-right">
                {{-- {{> partials/backend/header-action }} --}}
                <x-header-action />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">                
                <div class="card card-block card-stretch">
                    <div class="card-body custom-notes-space">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height card-bottom-border-purple note-detail">
                                    <div class="card-header d-flex justify-content-between pb-1">
                                        <div class="icon iq-icon-box-2 icon-border-purple rounded">
                                            <svg width="23" height="23" class="svg-icon" id="iq-main-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                            </svg>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" class="show-tab" data-show-tab="[href='#note3']" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton5"
                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton5" style="">
                                                        <a href="#" class="dropdown-item new-note2" data-toggle="modal" data-target="#new-note2"><i class="ri-eye-line mr-3"></i>View</a>
                                                        <a data-extra-toggle="delete" data-closest-elem=".card" class="dropdown-item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body rounded">
                                        <h4 class="card-title">Birthday Celebration</h4>
                                        <p class="mb-3 card-description short">You can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>
                                        <ul class="pl-3 mb-0">
                                            <li class="note-list">Cakes and Balloons.</li>
                                        </ul>  
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-between note-text note-text-purple"> 
                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>08 Jan 2021</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                    <div class="card-header d-flex justify-content-between pb-1">
                                        <div class="icon iq-icon-box-2 icon-border-info rounded">
                                            <svg width="23" height="23" class="svg-icon" id="iq-main-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton4"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton4" style="">
                                                    <a href="#" class="dropdown-item new-note1" data-toggle="modal" data-target="#new-note1"><i class="ri-eye-line mr-3"></i>View</a>
                                                    <a data-extra-toggle="delete" data-closest-elem=".card" class="dropdown-item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body rounded">
                                        <h4 class="card-title">Weekly Planner</h4>
                                        <p class="mb-3 card-description short">Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>                                                            
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-between note-text note-text-info"> 
                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>03 share</a>                                                            
                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09 Jan 2021</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height card-bottom-border-success note-detail">
                                    <div class="card-header d-flex justify-content-between pb-1">
                                        <div class="icon iq-icon-box-2 icon-border-success rounded">
                                            <svg width="23" height="23" class="svg-icon" id="iq-main-06" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                            </svg>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton9"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton9" style="">
                                                    <a href="#" class="dropdown-item new-note6" data-toggle="modal" data-target="#new-note6"><i class="ri-eye-line mr-3"></i>View</a>
                                                    <a data-extra-toggle="delete" data-closest-elem=".card" class="dropdown-item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body rounded">
                                        <h4 class="card-title">Benefits of NotePlus</h4>
                                        <p class="mb-3 card-description short">Take organized notes and share later as meeting minutes or check-list with this simple accessible Noteplus. Each note you create will be stored on a virtual page of the NotePlus. You can store groups of seperate notes. You can store an unlimited number of separate notes within the NotePlus.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-between note-text note-text-success"> 
                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>02 share</a>                                                            
                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>11 Jan 2021</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
                                    <div class="card-header d-flex justify-content-between pb-1">
                                        <div class="icon iq-icon-box-2 icon-border-warning rounded">
                                            <svg width="23" height="23" class="svg-icon" id="iq-main-08" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                            </svg>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton11"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton11" style="">
                                                    <a href="#" class="dropdown-item new-note8" data-toggle="modal" data-target="#new-note8"><i class="ri-eye-line mr-3"></i>View</a>
                                                    <a data-extra-toggle="delete" data-closest-elem=".card" class="dropdown-item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body rounded">
                                        <h4 class="card-title">Address & Email</h4>
                                        <p class="mb-3 card-description short">Quickly note down the address and email address on NotePlus so that you can access it from anywhere.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-between note-text note-text-warning"> 
                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>04 share</a>                                                            
                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10 Jan 2021</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height card-bottom-border-primary note-detail">
                                    <div class="card-header d-flex justify-content-between pb-1">
                                        <div class="icon iq-icon-box-2 icon-border-primary rounded">
                                            <svg width="23" height="23" class="svg-icon" id="iq-main-05" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note3']" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton8"
                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton8" style="">
                                                        <a href="#" class="dropdown-item new-note5" data-toggle="modal" data-target="#new-note5"><i class="ri-eye-line mr-3"></i>View</a>
                                                        <a data-extra-toggle="delete" data-closest-elem=".card" class="dropdown-item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body rounded">
                                        <h4 class="card-title">Image Notes</h4>
                                        <ul class="row mb-0 p-0 list-inline flex-wrap align-items-center">
                                            <li class="col-4">
                                                <a href="#">
                                                    <img src="{{asset('images/gallery/grid/01.jpg')}}" class="img-fluid note-image rounded" alt="" />  
                                                </a> 
                                            </li>
                                            <li class="col-4">
                                                <a href="#">
                                                    <img src="{{asset('images/gallery/grid/02.jpg')}}" class="img-fluid note-image rounded" alt="" />  
                                                </a> 
                                            </li>
                                            <li class="col-4">
                                                <a href="#">
                                                    <img src="{{asset('images/gallery/grid/03.jpg')}}" class="img-fluid note-image rounded" alt="" />  
                                                </a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-between note-text note-text-primary"> 
                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>01 Share</a>                                                            
                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>12 Jan 2021</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height card-bottom-border-danger note-detail">
                                    <div class="card-header d-flex justify-content-between pb-1">
                                        <div class="icon iq-icon-box-2 icon-border-danger rounded">
                                            <svg width="23" height="23" class="svg-icon" id="iq-main-04" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">                                                                
                                            <a href="#" data-toggle="tooltip" data-placement="top" title=""  class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton7"
                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton7" style="">
                                                        <a href="#" class="dropdown-item new-note4" data-toggle="modal" data-target="#new-note4"><i class="ri-eye-line mr-3"></i>View</a>
                                                        <a data-extra-toggle="delete" data-closest-elem=".card" class="dropdown-item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body rounded">
                                        <h4 class="card-title">Lecture Notes</h4>
                                        <div class="checkbox mb-2">
                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox1">
                                            <label for="checkbox1" class="note-checkbox mb-0">Chapter 1 notes.</label>
                                        </div>
                                        <div class="checkbox mb-2">
                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox2">
                                            <label for="checkbox2" class="note-checkbox mb-0">Chapter 2 Assignment.</label>
                                        </div>
                                        <div class="checkbox mb-2">
                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox3">
                                            <label for="checkbox3" class="note-checkbox mb-0">Chapter 3 practical File.</label>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-between note-text note-text-danger"> 
                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>
                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10 Jan 2021</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
    <!-- View Modal  -->
    {{-- {{> partials/backend/modal }} --}}
    <!-- Modal -->
    <div class="modal fade" id="delete-btn" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-center">
                        <h4 class="mb-3">Delete</h4>
                        <div class="content create-workform">
                            <p class="mb-2">Are yo sure you want to delete this ?</p>
                            <div class="row">  
                                <div class="col-lg-12 mt-4">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                        <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Continue</div>
                                    </div>
                                </div>                                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</x-app-layout>