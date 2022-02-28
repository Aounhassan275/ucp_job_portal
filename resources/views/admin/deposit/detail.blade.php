@extends('admin.layout.index')

@section('title')
    View {{$deposit->candidate->name}} Deposit Detail
@endsection

@section('content')
<div class="card">
    <table class="table  datatable-basic datatable-row-basic">
        <thead>
            <tr>
                <th>Candidate Name</th>
                <th>Candidate Email Address</th>
                <th>Candidate Status</th>
                <th>Candidate Deposit Amount</th>
                <th>Candidate Category 1</th>
                <th>Candidate Category 2</th>
                <th>Candidate Trancation ID</th>
                <th>Candidate Payment Way</th>
                <th>Created By</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>

            <tr>
                <td>{{$deposit->candidate->name}}</td>
                <td>{{$deposit->candidate->email}}</td>
                <td>
                    @if($deposit->status=="Active")
                    <span class="badge badge-success">{{$deposit->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$deposit->status}}</span>
                    @endif
                </td>
                <td>{{$deposit->price}}</td>
                <td>{{$deposit->category1}}</td>
                <td>{{$deposit->category2}}</td> 
                <td>{{$deposit->t_id}}</td>
                <td>{{$deposit->payment}}</td>
                @if($deposit->member)
                <td>{{$deposit->member->name}}</td>
                @else
                <td>Self</td>
                @endif
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('admin.candidate.actives',$deposit->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Active Candidate</a>
                            </div>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>


<!-- Main content -->
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
                        <div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url({{asset('global_assets/images/backgrounds/panel_bg.png')}}); background-size: contain;">
                            <div class="card-img-actions d-inline-block mb-3">
                                <img class="img-fluid rounded-circle" src="{{asset($deposit->profile->image)}}" width="170" height="170" alt="">
                            </div>

                        <h6 class="font-weight-semibold mb-0">{{$deposit->profile->name}} | {{$deposit->profile->profile}}</h6>

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
                                            <input type="text" value="{{$deposit->profile->name}}" readonly="readonly"  class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>S/o or W/o or D/o</label>
                                            <input type="text" value="{{$deposit->profile->fname}}" readonly="readonly"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input type="text" value="{{$deposit->profile->address}}" readonly="readonly"  class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>CNIC</label>
                                            <input type="text" value="{{$deposit->profile->cnic}}" readonly="readonly" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone Number#</label>
                                            <input type="text" value="{{$deposit->profile->number}}" readonly="readonly"  class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Professional</label>
                                            <input type="text" value="{{$deposit->profile->professional}}" readonly="readonly" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="text" readonly="readonly" value="{{$deposit->profile->email}}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Social</label>
                                            <textarea class="form-control" name="social" cols="102" rows="3" id="summary" spellcheck="true" readonly>{{$deposit->profile->social}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Facebook Url</label>
                                            <input type="text" readonly="readonly" value="{{$deposit->profile->url_fb}}" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Linkedin Url</label>
                                            <input type="text" readonly="readonly" value="{{$deposit->profile->url_linkedin}}" class="form-control">
                                        </div>  
                                        <div class="col-md-4">
                                            <label>Twitter Url</label>
                                            <input type="text" readonly="readonly" value="{{$deposit->profile->url_twitter}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Candidate Qualification</label>
                                            <input type="text" readonly="readonly" value="{{$deposit->profile->qualification}}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Passing Date</label>
                                            <input type="text" readonly="readonly" value="{{$deposit->profile->p_date}}" class="form-control">
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Job Description</label>
                                            <textarea class="form-control" name="job_description" cols="47" rows="3" id="summary" spellcheck="true" readonly>{{$deposit->profile->job_description}}</textarea>
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