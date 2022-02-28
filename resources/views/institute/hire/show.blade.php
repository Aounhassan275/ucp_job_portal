@extends('institute.layout.index')

@section('title') 
    View Candidates Hire Request
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
                                    <img class="img-fluid rounded-circle" src="{{asset($hire->profile->image)}}" width="170" height="170" alt="">
                                    <div class="card-img-actions-overlay card-img rounded-circle">
                                        <a href="{{route('institute.candidate.show',$hire->profile->id)}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                            <i class="icon-link"></i>
                                        </a>
                                    </div>
                                </div>
                
                                <h6 class="font-weight-semibold mb-0">{{$hire->profile->name}}</h6>
                                <span class="d-block opacity-75">{{$hire->profile->professional}}</span>
                                <span class="d-block opacity-75">{{$hire->status}}</span>
                
                                <div class="list-icons list-icons-extended mt-3">
                                    @if($hire->profile->number)
                                    <a href="https://api.whatsapp.com/send?phone={{$hire->profile->number}}"><img src="{{asset('whatsapp.png')}}" height="20" width="20" alt=""></a>
                                    @endif
                                    @if($hire->profile->url_twitter)
                                    <a href="{{$hire->profile->url_twitter}}" class="list-icons-item text-white" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
                                    @endif
                                    @if($hire->profile->url_fb)
                                <a href="{{$hire->profile->url_fb}}" class="list-icons-item text-white" data-popup="tooltip" title="Facebook" data-container="body"><i class="icon-facebook"></i></a>
                                    @endif
                                    @if($hire->profile->address)
                                <a href="https://www.google.com.sa/maps/search/{{$hire->profile->address}}?hl=en"><img src="{{asset('location.png')}}" height="20" width="20" alt=""></a>
                                    @endif
                                    @if($hire->profile->url_linkedin)
                                <a href="{{url($hire->profile->url_linkedin)}}"><img src="{{asset('linkedin.png')}}" height="20" width="20" alt=""></a>
                                    @endif
                                </div>
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
                            <h5 class="card-title">Profile information</h5>
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
                                            <label>Description</label>
                                            <textarea name="" id="" readonly="readonly"  class="form-control" cols="30" rows="10">{{$hire->description}}</textarea>
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
@endsection