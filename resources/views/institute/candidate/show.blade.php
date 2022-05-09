@extends('institute.layout.index')

@section('title')
    View Candidates Detail
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
                                <img class="img-fluid rounded-circle" src="{{asset($profile->image)}}" width="170" height="170" alt="">
                            </div>
                        
                        <h6 class="font-weight-semibold mb-0">{{$profile->name}} | {{$profile->profile}} 
                            @if($profile->profile == "Approved") | 
                            <button type="button" class="btn btn-success" data-toggle="modal" 
                            data-target="#modal_form_vertical">Hire</button>  
                            @endif
                        </h6>

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
                                        <div class="col-md-6">
                                            <label>Name</label>
                                            <input type="text" value="{{$profile->name}}" readonly="readonly"  class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>S/o or W/o or D/o</label>
                                            <input type="text" value="{{$profile->fname}}" readonly="readonly"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input type="text" value="{{$profile->address}}" readonly="readonly"  class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>CNIC</label>
                                            <input type="text" value="{{$profile->cnic}}" readonly="readonly" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone Number#</label>
                                            <input type="text" value="{{$profile->number}}" readonly="readonly"  class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Professional</label>
                                            <input type="text" value="{{$profile->professional}}" readonly="readonly" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="text" readonly="readonly" value="{{$profile->email}}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Social</label>
                                            <textarea class="form-control" name="social" cols="102" rows="3" id="summary" spellcheck="true" readonly>{{$profile->social}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Facebook Url</label>
                                            <input type="text" readonly="readonly" value="{{$profile->url_fb}}" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Linkedin Url</label>
                                            <input type="password" readonly="readonly" value="{{$profile->url_linkedin}}" class="form-control">
                                        </div>  
                                        <div class="col-md-4">
                                            <label>Twitter Url</label>
                                            <input type="text" readonly="readonly" value="{{$profile->url_twitter}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Candidate Qualification</label>
                                            <input type="text" readonly="readonly" value="{{$profile->qualification}}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Passing Date</label>
                                            <input type="text" readonly="readonly" value="{{$profile->p_date}}" class="form-control">
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Profile Category</label>
                                            <input type="text" readonly="readonly" value="{{@$profile->category->name}}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Job Description</label>
                                            <textarea class="form-control WYSIWYG" name="job_description" cols="47" rows="3" id="summary" spellcheck="true" readonly>{{$profile->job_description}}</textarea>
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
                <h5 class="modal-title">Hire Candidate</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="{{route('institute.hire.store')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Interview Time:</label>
                                <input type="time" class="form-control" name="time" required>
                            </div>
                            <div class="col-sm-6">
                                <label>Interview Date:</label>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                            <div class="col-sm-12">
                                <label>Interview Joining Link:</label>
                                <input type="text" class="form-control" name="link" required>
                            </div>

                            <div class="col-sm-12">
                                <label>Description:</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="4" required></textarea>                            
                            </div>

                            <div class="col-sm-12">
                                <label>Jobs:</label>
                                <select name="job_id" class="form-control" required>
                                    <option value="">Select</option>
                                    @foreach (Auth::user()->jobs as $job)
                                    <option value="{{$job->id}}">{{$job->title}}</option>

                                    @endforeach
                                </select>                            
                                <input type="hidden" name="institute_id" value="{{Auth::user()->id}}" placeholder=" password*" class="form-control">
                                <input type="hidden" name="profile_id" value="{{$profile->id}}" placeholder=" password*" class="form-control">                              
                                <input type="hidden" name="candidate_id" value="{{$profile->candidate->id}}" placeholder=" password*" class="form-control">
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