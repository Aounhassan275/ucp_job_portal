@extends('institute.layout.index')
@section('title')
    View Service Providers
@endsection
@section('content')
<div class="content-wrapper">

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
                        <div class="card bg-teal-400" style="background-image: url({{asset('global_assets/images/backgrounds/panel_bg.png')}}); background-size: contain;">
                            <div class="card-body text-center">
                                <div class="card-img-actions d-inline-block mb-3">
                                    <img class="img-fluid rounded-circle" src="{{asset($s_deposit->service->image)}}" width="170" height="170" alt="">
                                    {{--  <div class="card-img-actions-overlay card-img rounded-circle">
                                       <a href="{{route('institute.service.show',$s_deposit->id)}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                            <i class="icon-link"></i>
                                        </a>
                                    </div>  --}}
                                </div>
                
                                <h6 class="font-weight-semibold mb-0">{{$s_deposit->service->name}}</h6>
                                <span class="d-block opacity-75">{{$s_deposit->skill->name}}</span>
                
                                <div class="list-icons list-icons-extended mt-3">
                                    <a href="https://api.whatsapp.com/send?phone={{$s_deposit->service->phone}}"><img src="{{asset('whatsapp.png')}}" height="20" width="20" alt=""></a>
                                    <a href="tel:{{$s_deposit->service->phone}}"><img src="{{asset('phone.png')}}" height="20" width="20" alt=""></a>
                                <a href="{{$s_deposit->service->fb}}" class="list-icons-item text-white" data-popup="tooltip" title="Facebook" data-container="body"><i class="icon-facebook"></i></a>
                                <a href="https://www.google.com.sa/maps/search/{{$s_deposit->service->address}}?hl=en"><img src="{{asset('location.png')}}" height="20" width="20" alt=""></a>
                                </div>
                            </h6>
                            </div>
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
                    <!-- Profile info -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Service Provider information</h5>
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
                                        <div class="col-md-12">
                                            <label>Name</label>
                                            <input type="text" value="{{$s_deposit->service->name}}" readonly="readonly"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Address</label>
                                            <input type="text" value="{{$s_deposit->service->address}}" readonly="readonly"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Phone Number#</label>
                                            <input type="text" value="{{$s_deposit->service->phone}}" readonly="readonly"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Facebook Profile Link:</label>
                                            <input type="text" readonly="readonly" value="{{$s_deposit->service->fb}}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Skill</label>
                                            <input type="text" readonly="readonly" value="{{$s_deposit->skill->name}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
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
<div id="modal_form_vertical" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Candidate</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="{{route('institute.shire.store')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Description:</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="4" required></textarea>                            
                                <input type="hidden" name="password" value="1234" placeholder=" password*" class="form-control">
                                <input type="hidden" name="institute_id" value="{{Auth::user()->id}}" placeholder=" password*" class="form-control">
                                <input type="hidden" name="s_deposit_id" value="{{$s_deposit->id}}" placeholder=" password*" class="form-control">
                                <input type="hidden" name="service_id" value="{{$s_deposit->service->id}}" placeholder=" password*" class="form-control">
                            </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-primary">Submit form</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection