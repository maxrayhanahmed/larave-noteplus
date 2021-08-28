<x-app-layout>
    <div class="container-fluid">        
        <div class="desktop-header">
            <div class="card card-block topnav-left">
                <div class="card-body write-card">
                     <div class="d-flex flex-wrap align-items-center justify-content-between">
                           <h4>Planning</h4>
                           <div class="media flex-wrap align-items-center">
                              <div class="iq-search-bar card-search mr-3 position-relative">
                                 <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="ri-search-line"></i>
                                 </a>
                                 <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                       <form action="#" class="searchbox">
                                          <div class="form-group mb-0 position-relative">
                                          <input type="text" class="text search-input font-size-12" placeholder="Find Your Notebook..">
                                          <a href="#" class="search-link"><i class="ri-search-line"></i></a> 
                                          </div>
                                       </form>
                                 </div>
                              </div>
                              <a href="#" class="btn btn-primary add-btn" data-toggle="modal" data-target="#new-note"><i class="las la-plus pr-2"></i>New Folder</a>
                           </div>
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
               <div class="card card-block card-stretch card-height note-table">
                  <div class="card-body custom-notes-space">
                     <div class="table-responsive">
                        <table id="tree-table-9" class="table tree mb-0 tbl-server-info">
                           <thead class="bg-white text-uppercase">
                              <tr class="ligth">
                                 <th>Title</th>
                                 <th>Created By</th>
                                 <th>Updated</th>
                                 <th>Shared With</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr data-id="1" data-parent="0" data-level="1">
                                 <td data-column="name">First Notebook</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 4</td>
                                 <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="2" data-parent="1" data-level="1">
                                 <td data-column="name">Birthday Celebration</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 4</td>
                                 <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="3" data-parent="1" data-level="1">
                                 <td data-column="name">Lecture Notes</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td><i class="las la-user-friends mr-3 font-size-20"></i>
                                    02 share</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="4" data-parent="1" data-level="1">
                                 <td data-column="name">Meal Planner</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 6</td>
                                 <td><i class="las la-user-friends mr-3 font-size-20"></i>
                                    01 share</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="5" data-parent="0" data-level="1">
                                 <td data-column="name">Project Plan</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 4</td>
                                 <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="6" data-parent="5" data-level="1">
                                 <td data-column="name">Birthday</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 4</td>
                                 <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="7" data-parent="5" data-level="1">
                                 <td data-column="name">Essay Outline</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 4</td>
                                 <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="8" data-parent="5" data-level="1">
                                 <td data-column="name">Lecture Notes</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td><i class="las la-user-friends mr-3 font-size-20"></i>
                                    02 share</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="9" data-parent="0" data-level="1">
                                 <td data-column="name">Meeting Notes</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td><i class="las la-user-friends mr-3 font-size-20"></i>
                                    02 share</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="10" data-parent="9" data-level="2">
                                 <td data-column="name">Reminder</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td><i class="las la-user-friends mr-3 font-size-20"></i>
                                    02 share</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="11" data-parent="9" data-level="2">
                                 <td data-column="name">to-do</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td><i class="las la-user-friends mr-3 font-size-20"></i>
                                    02 share</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="12" data-parent="9" data-level="2">
                                 <td data-column="name">Daily Reflection</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td><i class="las la-user-friends mr-3 font-size-20"></i>
                                    02 share</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="13" data-parent="0" data-level="1">
                                 <td data-column="name">Event Notes</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 8</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                     05 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="14" data-parent="13" data-level="2">
                                 <td data-column="name">Meal Planner</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 6</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                     04 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="15" data-parent="13" data-level="2">
                                 <td data-column="name">to-do</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                     02 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="16" data-parent="13" data-level="2">
                                 <td data-column="name">Daily Reflection</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                     02 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="17" data-parent="0" data-level="1">
                                 <td data-column="name">Classic Notes</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                     06 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="18" data-parent="17" data-level="2">
                                 <td data-column="name">Note Planner</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 6</td>
                                 <td>
                                    05 Share
                                    04 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="19" data-parent="17" data-level="2">
                                 <td data-column="name">Event Note</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                     02 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="20" data-parent="17" data-level="2">
                                 <td data-column="name">Daily Meting</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 6</td>
                                 <td>
                                   <i class="las la-user-friends mr-3 font-size-20"></i>
                                    05 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="21" data-parent="0" data-level="1">
                                 <td data-column="name">New Classic</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 19</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                     08 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="22" data-parent="21" data-level="2">
                                 <td data-column="name">Event note</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 20</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    09 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="23" data-parent="0" data-level="1">
                                 <td data-column="name">Second Note</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 5</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                     02 Share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="24" data-parent="23" data-level="2">
                                 <td data-column="name">Daily Meting</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 6</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    04 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="25" data-parent="0" data-level="1">
                                 <td data-column="name">New Meting</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 6</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    02 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="26" data-parent="25" data-level="2">
                                 <td data-column="name">Meting Updates</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 6</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    02 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="27" data-parent="25" data-level="2">
                                 <td data-column="name">Date List</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 9</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    08 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="28" data-parent="0" data-level="1">
                                 <td data-column="name">Fresser List</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    08 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="29" data-parent="28" data-level="2">
                                 <td data-column="name">Updated List</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    08 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="30" data-parent="28" data-level="2">
                                 <td data-column="name">New Date</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="31" data-parent="28" data-level="2">
                                 <td data-column="name">Fress List</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="32" data-parent="0" data-level="1">
                                 <td data-column="name">New Details</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="33" data-parent="32" data-level="2">
                                 <td data-column="name">New work</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="34" data-parent="0" data-level="1">
                                 <td data-column="name">Updated List</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    08 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="35" data-parent="34" data-level="2">
                                 <td data-column="name">Updated doc</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    07 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="36" data-parent="0" data-level="1">
                                 <td data-column="name">New Updates</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    06 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="37" data-parent="36" data-level="2">
                                 <td data-column="name">New Updates</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 10</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    06 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="38" data-parent="0" data-level="1">
                                 <td data-column="name">Work Notes</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 21</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    06 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              <tr data-id="39" data-parent="38" data-level="2">
                                 <td data-column="name">Work Notes</td>
                                 <td>Bud Wiser</td>
                                 <td>Dec 22</td>
                                 <td>
                                     <i class="las la-user-friends mr-3 font-size-20"></i>
                                    01 share
                                 </td>
                                 <td>
                                    <div>
                                        <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="new-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Create New Notebook</h4>
                        <div class="content create-workform">
                            <h5 class="mb-2">Name</h5>
                            <input type="text" class="form-control" placeholder="Notebook Name">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Edit Notebook</h4>
                        <div class="content create-workform">
                            <h5 class="mb-2">Name</h5>
                            <input type="text" class="form-control" placeholder="Notebook Name" value="" id="notebook-title" name="note">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>