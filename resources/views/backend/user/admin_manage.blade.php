
@extends('backend.master')
@section('title')
    Admin List
@endsection
@section('content')
    <div class="content-page">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Admin List</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 col-md-6">
                                        <div id="user_list_datatable_info" class="dataTables_filter">
                                            <form class="mr-3 position-relative">
                                                <div class="form-group mb-0">
                                                    <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="user-list-files d-flex">
                                            <a class="bg-primary" href="javascript:void();" >
                                                Print
                                            </a>
                                            <a class="bg-primary" href="javascript:void();">
                                                Excel
                                            </a>
                                            <a class="bg-primary" href="javascript:void();">
                                                Pdf
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table id="user-list-table" class="table table-striped tbl-server-info mt-4" role="grid" aria-describedby="user-list-page-info">
                                    <thead>
                                    <tr class="ligth">
                                        <th>S.L.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Country</th>
{{--                                        <th>Status</th>--}}
                                        <th>Company</th>
                                        <th>Join Date</th>
                                        <th style="min-width: 100px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($admins as $user)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td class="text-center"><img class="rounded img-fluid avatar-40" src="{{asset($user->image)}}" alt="{{$user->name}}"></td>
                                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                                        <td>{{$user->mobile_no}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->country}}</td>
{{--                                        <td><span class="badge iq-bg-primary">Active</span></td>--}}
                                        <td>{{$user->company}}</td>
                                        <td>2019/12/01</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="{{route('user.add.get')}}"><i class="ri-user-add-line"></i></a>
                                                @if(Auth::user()->id !== $user->id)
                                                <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{route('user.edit', ['id' => $user->id])}}"><i class="ri-pencil-line"></i></a>
                                                <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('user.delete', ['id' => $user->id])}}" onclick="confirm('Are you sure you want to delete this item?');"><i class="ri-delete-bin-line"></i></a>

                                                @endif



                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row justify-content-between mt-3">
                                <div id="user-list-page-info" class="col-md-6">
                                    <span>Showing 1 to 5 of 5 entries</span>
                                </div>
                                <div class="col-md-6">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
