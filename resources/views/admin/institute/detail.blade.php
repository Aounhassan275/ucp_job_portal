@extends('admin.layout.index')

@section('title')
    View  {{$institute->name}} Profile
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
                                    <img class="img-fluid rounded-circle" src="{{asset($institute->image)}}" width="170" height="170" alt="">
                                </div>

                            <h6 class="font-weight-semibold mb-0">{{$institute->name}} | {{$institute->status}}</h6>

                            </div>
                        </div>
                        <!-- /navigation -->


                        <!-- Online users -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="card-title font-weight-semibold">Package Deposit Request</span>
                            </div>

                            <div class="card-body">
                                <ul class="media-list">
                                    @foreach ($institute->i_deposits as $i_deposit)
                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold">Amount: PKR{{$i_deposit->price}}</a>
                                            <div class="font-size-sm text-muted">Transcation ID#{{$i_deposit->t_id}}</div>
                                            <div class="font-size-sm text-muted">Payment Method: {{$i_deposit->payment}}</div>
                                            <div class="font-size-sm text-muted">Date:{{ \Carbon\Carbon::parse($i_deposit->createdat)->format('d/m/Y')}}
                                            </div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-success"></span>
                                        </div>
                                    </li>
                                    @endforeach
                                  
                                </ul>
                            </div>
                        </div>
                        <!-- /online users -->
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
                                                <h6 class="font-weight-semibold">Active Institute Profile</h6>
                                            </div>

                                            <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                            <h6 class="font-weight-semibold"><a href="{{route('admin.institute.active',$institute->id)}}" class="btn btn-success">Active</a></h6>
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
                                                <h6 class="font-weight-semibold">Block Institute</h6>
                                            </div>

                                            <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                            <h6 class="font-weight-semibold"><a href="{{route('admin.institute.block',$institute->id)}}" class="btn btn-danger">Block</a></h6>
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
                                                <input type="text" value="{{$institute->name}}" readonly="readonly"  class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Email Address</label>
                                                <input type="text" value="{{$institute->email}}" readonly="readonly"  class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                                <input type="text" value="{{$institute->address}}" readonly="readonly"  class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Phone Number</label>
                                                <input type="text" value="{{$institute->phone}}" readonly="readonly" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>

                </div>
                <!-- /right content -->

            </div>
            <!-- /inner container -->

        </div>
        <!-- /content area -->
    </div>



@endsection