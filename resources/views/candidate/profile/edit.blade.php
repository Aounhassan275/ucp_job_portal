@extends('candidate.layout.index')

@section('title')
    Manage Profile
@endsection

@section('content')
@if($profile->a_date)
<div class="row">
    <div class="col-sm-6 col-xl-6">
        <div class="card card-body">
            <div class="media mb-3">
                <div class="mr-3 align-self-center">
                    <i class="icon-pulse2 icon-2x text-success-400 opacity-75"></i>
                </div>

                <div class="media-body">
                    <h6 class="font-weight-semibold mb-0">Note:</h6>
                        After {{(90-Carbon\Carbon::today()->diffInDays($profile->a_date))}}  Days your Subscription For Candidate Panel Got Expire.
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-6 col-xl-6">
        <a href="{{url('#')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{Carbon\Carbon::today()->diffInDays($profile->a_date)}}</h3>
                        <span class="text-uppercase font-size-xs">Subscription Days</span>
                    </div>
                    <div class="ml-3 align-self-center">
                        <i class="icon-coin icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div> 
@endif
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Profile</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('candidate.profile.update',$profile->id)}}" method="POST"  enctype="multipart/form-data"> 
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Your Name<span style="color:green;">(*Required)</span></label>
                            <input class="form-control" type="text" name="name" placeholder="Your full name"  value="{{$profile->name}}"  required/>
                            <input class="form-control" type="hidden" name="candidate_id" placeholder="Your full name"  value="{{Auth::user()->id}}"  required/>
                        </div>   
                        <div class="form-group col-md-6">
                            <label>S/O or D/O or W/O<span style="color:green;">(*Required)</span> </label>
                            <input class="form-control" type="text" name="fname"  placeholder="S/O or D/O or W/O" value="{{$profile->fname}}" required/>
                        </div>  
                        <div class="form-group col-md-6">
                            <label>Your Email<span style="color:green;">(*Required)</span></label>
                            <input class="form-control" type="email" name="email" placeholder="mail@example.com" value="{{$profile->email}}" required/>
                        </div> 
                        <div class="form-group col-md-6">
                            <label>Your Phone Number<span style="color:green;">(*Required)</span></label>
                            <input class="form-control" type="text" name="number" maxlength="13" minlength="13" value="{{$profile->number}}" required/>                      
                        </div>      
                        <div class="form-group col-md-6">
                            <label>Your CNIC Number<span style="color:green;">(*Required)</span></label>
                            <input class="form-control" value="{{$profile->cnic}}" type="text" name="cnic" maxlength="15" minlength="15" id="cnic" value="xxxxx-xxxxxxx-x" required/>                          
                        </div>   
                        <div class="form-group col-md-6">
                            <label>Professional Title<span style="color:green;">(*Required)</span></label>
                            <input class="form-control" type="text" name="professional" placeholder="e.g. Web Developer" value="{{$profile->professional}}" required/>
                        </div>  
                        <div class="form-group col-md-6">
                            <h5>Your Complete Address<span style="color:green;">(*Required)</span></h5>
                            <input class="form-control" type="text" name="address" placeholder="e.g. Sargodha, Punjab" value="{{$profile->address}}" required/>
                        </div>  
                        <div class="form-group col-md-6">
                            <label>Profile Image<span style="color:green;">(*Leave it Blank if u dont want to Change)</span></label>
                            <input class="form-control" type="file" name="image"  />
                        </div>  
                        <div class="form-group col-md-6">
                            <label>Describe Your Experience<span style="color:green;">(*Required)</span></label>
                            <textarea name="social" id="" cols="30" rows="2" class="form-control">{{$profile->social}}</textarea>
				        </div>
                        <div class="form-group col-md-6">
                            <label for="">Facebook URL <span style="color:red">(*Optional)</span></label>
                            <input class="form-control" type="text" name="url_fb" value="{{$profile->url_fb}}" placeholder="" />  
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="">Linkedin URL <span style="color:red">(*Optional)</span></label>
                            <input class="form-control" type="text" name="url_linkedin" placeholder=""  value="{{$profile->url_linkedin}}" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Twitter URL <span style="color:red">(*Optional)</span></label>
                            <input class="form-control" type="text" name="url_twitter" placeholder="" value="{{$profile->url_twitter}}" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Last Qualification</label>
                            <input class="form-control" type="text" name="qualification" placeholder="" value="{{$profile->qualification}}" />   
                        </div>
                        <div class="form-group col-md-6">                 
                            <label for="">Passing Date</label>
                            <input type="date" maxlength="10" class="form-control" value="{{$profile->date}}"  minlength="10" name="p_date">
                        </div>
                        {{-- <div class="form-group col-md-6">                 
                            <label for="">Job Title</label>
                            <input class="form-control" type="text" name="job_title" placeholder="" value="{{$profile->job_title}}" />    
                        </div>    --}}
                        <div class="form-group col-md-6">                 
                            <label for="">Description</label>
                            <textarea name="job_description" id="" cols="30" rows="2" class="form-control">{{$profile->job_description}}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create 
                        <i class="icon-plus22 ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
@endsection
@section('scripts')
<script>
 
    $('#cnic').keydown(function(){
    
      //allow  backspace, tab, ctrl+A, escape, carriage return
      if (event.keyCode == 8 || event.keyCode == 9 
                        || event.keyCode == 27 || event.keyCode == 13 
                        || (event.keyCode == 65 && event.ctrlKey === true) )
                            return;
      if((event.keyCode < 48 || event.keyCode > 57))
       event.preventDefault();
    
      var length = $(this).val().length; 
                  
      if(length == 5 || length == 13)
       $(this).val($(this).val()+'-');
       if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
// 0-9 only
}
     });
    </script>    
@endsection