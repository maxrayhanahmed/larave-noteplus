<div class="modal fade" id="new-note{{$loop->index}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <div class="media align-items-top justify-content-between">
                        <h3 class="mb-3">{{$note->title}}</h3>
                        <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                    </div>
                    <div class="content create-workform">
                        <p class="mb-4">{{$note->description}}</p>
                        <h4 class="mb-3">Shared</h4>
                        <ul class="list-inline p-0 m-0">
                            <li>
                                <div class="media align-items-center cust-card">
                                    <div class="">
                                        <img class="avatar-50 rounded-small" src="{{asset('backend')}}/images/user/03.jpg" alt="01">
                                    </div>
                                    <div class="media-body ml-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="mb-0">Mack Devid</h5>
                                            <h6 class="mb-0">05 Jan 2021</h6>
                                        </div>
                                        <p class="mb-0">mackdevid@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="m-3">
                                <h5 class="mb-0">Status :
                                    <strong>@if($note->staus == 1) Public @else Private @endif</strong>
                                </h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="m-3 text-right">
                                <h5 class="mb-0">Date :
                                    <strong>{{$note->reminder_date}}</strong>
                                </h5>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

