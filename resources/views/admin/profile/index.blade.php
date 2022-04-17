@extends('admin.layout.index')

@section('title')
    View {{$candidate->name}} Profile
@endsection

@section('content')

	<!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">User Profile</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Inner container -->
            <div class="d-md-flex align-items-md-start">

                <!-- Left sidebar component -->
                <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

                    <!-- Sidebar content -->
                    <div class="sidebar-content">
    
                        <!-- Navigation -->
                        <div class="card">
                            <div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url({{asset('global_assets/images/backgrounds/panel_bg.png')}}); background-size: contain;">
                                <div class="card-img-actions d-inline-block mb-3">
                                    <img class="img-fluid rounded-circle" src="{{asset($candidate->image)}}" width="170" height="170" alt="">
                                </div>

                            <h6 class="font-weight-semibold mb-0">{{$candidate->name}} | {{$candidate->status}}</h6>

                            </div>
                        </div>
                        <!-- /navigation -->

                    </div>
                    <!-- /sidebar content -->

                </div>
                <!-- /left sidebar component -->


                <!-- Right content -->
                <div class="tab-content w-100 overflow-auto">
                    <div class="tab-pane fade active show" id="profile">


                        <!-- Invoices -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card border-left-3 border-left-success rounded-left-0">
                                    <div class="card-body">
                                        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                            <div>
                                                <h6 class="font-weight-semibold">Active Candidate Profile</h6>
                                            </div>

                                            <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                            <h6 class="font-weight-semibold"><a href="{{route('admin.candidate.active',$candidate->id)}}" class="btn btn-success">Active</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="col-lg-6">
                                <div class="card border-left-3 border-left-danger rounded-left-0">
                                    <div class="card-body">
                                        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                            <div>
                                                <h6 class="font-weight-semibold">Block Candidate Profile</h6>
                                            </div>

                                            <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                            <h6 class="font-weight-semibold"><a href="{{route('admin.candidate.block',$candidate->id)}}" class="btn btn-danger">Block</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /invoices -->

                        <!-- Profile info -->
                        <div class="card col-12">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Profile Information</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                                <input type="text" value="{{$candidate->name}}" readonly="readonly"  class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Email Address</label>
                                                <input type="text" value="{{$candidate->email}}" readonly="readonly"  class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                                <input type="text" value="{{$candidate->address}}" readonly="readonly"  class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Phone Number</label>
                                                <input type="text" value="{{$candidate->phone}}" readonly="readonly" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /profile info --> 
                           <!-- Profile info -->
                           <div class="card col-12">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">CV Information</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">                      
                                <table class="table  datatable-basic datatable-row-basic">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>CV Status</th>
                                            <th>Action</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        @foreach ($candidate->profiles as $profile)

                                        <tr>
                                            <td>{{$profile->name}}</td>
                                            <td>{{$profile->candidate->email}}</td>
                                            <td>
                                                @if($profile->profile == "Approved")
                                                <span class="badge badge-success">{{$profile->profile}}</span>
                                                @elseif($profile->profile =="Rejected")
                                                <span class="badge badge-danger">{{$profile->profile}}</span>
                                                @else
                                                <span class="badge badge-primary">{{$profile->profile}}</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                            <i class="icon-menu9"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="{{route('admin.profile.show',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> View Detail</a>
                                                            <a href="{{route('admin.profile.approved',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Approved CV</a> 
                                                            <a href="{{route('admin.profile.rejected',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Reject CV</a>
                                                            {{-- <a href="{{route('candidate.candidate.delete',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Delete</a>
                                                            <a href="{{route('admin.candidate.block',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Block</a>
                                                            <a href="{{route('admin.candidate.active',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Active</a>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /profile info --> 



                    </div>

                </div>
                <!-- /right content -->

            </div>
            <!-- /inner container -->

        </div>
        <!-- /content area -->
    </div>



@endsection