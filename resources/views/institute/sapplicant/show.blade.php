@extends('institute.layout.index')

@section('title')
    View Service Provider Applicants
@endsection

@section('content')
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
                            <img class="img-fluid rounded-circle" src="{{asset($sapplicant->s_deposit->service->image)}}" width="170" height="170" alt="">
                            {{--  <div class="card-img-actions-overlay card-img rounded-circle">
                                <a href="{{route('institute.service.show',$sapplicant->s_deposit->id)}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>  --}}
                        </div>
        
                        <h6 class="font-weight-semibold mb-0">{{$sapplicant->s_deposit->service->name}}</h6>
                        <span class="d-block opacity-75">{{$sapplicant->s_deposit->skill->name}}</span>
                        @if($sapplicant->status=="Completed")
                        <span class="d-block opacity-100">Hired</span>
                        @elseif($sapplicant->status=="onHold")
                        <span class="d-block opacity-100">{{$sapplicant->status}}</span>  
                        @else
                        <span class="d-block opacity-100">{{$sapplicant->status}}</span>
                        @endif
                        <div class="list-icons list-icons-extended mt-3">
                            <a href="https://api.whatsapp.com/send?phone={{$sapplicant->s_deposit->service->phone}}"><img src="{{asset('whatsapp.png')}}" height="20" width="20" alt=""></a>
                        <a href="{{$sapplicant->s_deposit->service->fb}}" class="list-icons-item text-white" data-popup="tooltip" title="Facebook" data-container="body"><i class="icon-facebook"></i></a>
                        <a href="https://www.google.com.sa/maps/search/{{$sapplicant->s_deposit->service->address}}?hl=en"><img src="{{asset('location.png')}}" height="20" width="20" alt=""></a>
                        </div>
                    </div>
                </div>



                <div class="card-body p-0">

                    <ul class="nav nav-sidebar mb-2">

                        <li class="nav-item-header">Navigation</li>

                        <li class="nav-item">

                            <a href="#profile" class="nav-link active" data-toggle="tab">

                                <i class="icon-user"></i>

                                 Job Offer Detail

                            </a>

                        </li>

                        <li class="nav-item">

                            <a href="#schedule" class="nav-link" data-toggle="tab">

                                <i class="icon-office"></i>

                                Institute Detail

                            </a>

                        </li>
                        <li class="nav-item">

                            <a href="#hire" class="nav-link" data-toggle="tab">

                                <i class="icon-book"></i>

                                Description

                            </a>

                        </li>
                        <li class="nav-item">

                            <a href="#" class="nav-link" data-toggle="modal" 
                            data-target="#modal_form_vertical">

                                <i class="icon-folder"></i>

                                Hire Him

                            </a>


                        </li>

                    </ul>

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

                    <h5 class="card-title">Job information</h5>

                    <div class="header-elements">

                        <div class="list-icons">

                            <a class="list-icons-item" data-action="collapse"></a>

                            <a class="list-icons-item" data-action="reload"></a>

                            <a class="list-icons-item" data-action="remove"></a>

                        </div>

                    </div>

                </div>


    
                <div class="card card-body">
                    <div class="media flex-column flex-sm-row">
                        <div class="mr-sm-3 mb-2 mb-sm-0">
                            <a href="#">
                                <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" class="rounded" width="44" height="44" alt="">
                            </a>
                        </div>
                
                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold">
                            <a href="#">{{$sapplicant->job->title}}</a>
                            </h6>
                
                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                <li class="list-inline-item"><a href="#" class="text-muted">{{$sapplicant->job->type}}</a></li>
                                <li class="list-inline-item">{{$sapplicant->job->location}}</li>
                                <li class="list-inline-item">{{$sapplicant->job->salary}}</li>
                                <li class="list-inline-item">{{$sapplicant->job->skill->name}}</li>
                                <li class="list-inline-item">{{$sapplicant->job->institute->name}}</li>
                                @if($sapplicant->job->member)
                                <li class="list-inline-item">Created By:{{$sapplicant->job->member->name}}    
                                </li>
                                @endif
                                <li class="list-inline-item">
                                    @if($sapplicant->job->status=="Approved")
                                    <span class="badge badge-success">{{$sapplicant->job->status}}</span>
                                    @else
                                    <span class="badge badge-danger">{{$sapplicant->job->status}}</span>
                                    @endif                
                                </li>
                            </ul>
                
                            {{$sapplicant->job->summary}}
                        </div>
                    </div>
                </div>

            </div>

            <!-- /profile info -->



        </div>    

        <div class="tab-pane fade" id="schedule">

            <div class="card">

                <div class="card-header header-elements-inline">

                    <h5 class="card-title">Institute Information</h5>

                    <div class="header-elements">

                        <div class="list-icons">

                            <a class="list-icons-item" data-action="collapse"></a>

                            <a class="list-icons-item" data-action="reload"></a>

                            <a class="list-icons-item" data-action="remove"></a>

                        </div>

                    </div>

                </div>


                <table class="table datatable-save-state">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Institute Address</th>
                            <th>Institute Whatsapp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$sapplicant->institute->name}}</td>
                            <td>{{$sapplicant->institute->email}}</td>
                            <td class="text-center">
                                <a href="https://api.whatsapp.com/send?phone={{$sapplicant->institute->number}}">
                                    <img src="{{asset('whatsapp.png')}}" height="20" width="20" alt="">
                                </a>
                            </td>
                            <td>{{$sapplicant->institute->address}}</td>
                            
                        </tr>
                    </tbody>
                </table>

            </div>

           

        </div> 
        <div class="tab-pane fade" id="hire">

            <div class="card">

                <div class="card-header header-elements-inline">

                    <h5 class="card-title">Description</h5>

                    <div class="header-elements">

                        <div class="list-icons">

                            <a class="list-icons-item" data-action="collapse"></a>

                            <a class="list-icons-item" data-action="reload"></a>

                            <a class="list-icons-item" data-action="remove"></a>

                        </div>

                    </div>

                </div>
                <div class="card-body">
                        
                            <div class="form-group col-md-12">
                                <label>Description Message</label>
                                <textarea name="message" id="" cols="30" rows="10" class="form-control" readonly>{{$sapplicant->description}}</textarea>
                            </div>
                        </div>
                </div>

            </div>

           

        </div>



    </div>

    <!-- /right content -->



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
                                <input type="hidden" name="job_id" value="{{$sapplicant->job->id}}" class="form-control">
                                <input type="hidden" name="institute_id" value="{{Auth::user()->id}}" placeholder=" password*" class="form-control">
                                <input type="hidden" name="s_deposit_id" value="{{$sapplicant->s_deposit->id}}" placeholder=" password*" class="form-control">
                                <input type="hidden" name="service_id" value="{{$sapplicant->s_deposit->service->id}}" placeholder=" password*" class="form-control">
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