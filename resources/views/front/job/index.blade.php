@extends('front.layout.index')
@section('title')
    <title>BROWSE JOB | CANIDADATE | SERVICE PROVIDER | OTPL</title>
@endsection
@section('css')


<link rel="stylesheet" type="text/css" href="{{asset('front/css/style_iv.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive_iv.css')}}" />
@endsection
@section('contents')
<div class="jp_tittle_main_wrapper">
	<div class="jp_tittle_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="jp_tittle_heading_wrapper">
					<div class="jp_tittle_heading">
						<h2>{{$Keyword}}
                        </h2>
					</div>
					<div class="jp_tittle_breadcrumb_main_wrapper">
						<div class="jp_tittle_breadcrumb_wrapper">
							<ul>
								<li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>
								<li><a href="{{url('/')}}"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@if ($Category == "1")
<div class="jp_listing_sidebar_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content">
                            <div id="grid" class="tab-pane fade in active">
                                <div class="row">
                                    @foreach($jobs as $job)
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{asset($job->institute->image)}}" height="105" width="95" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>{{$job->title}}</h4>
                                                            <p><i class="fa fa-university"></i>&nbsp; {{$job->institute->name}} &nbsp; <i class="fa fa-desktop"></i>&nbsp; {{$job->category->name}}</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; PKR {{$job->salary}}</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; {{$job->location}}</li>
                                                                <li><i class="fa fa-plus-square-o "></i>&nbsp; {{$job->type}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="{{url('signup_login')}}"><i class="fa fa-whatsapp"></i></a></li>
                                                                <li><a href="https://www.google.com.sa/maps/search/{{$job->location}}?hl=en"><i class="fa fa-map-marker"></i></a></li>
                                                                <li><a href="{{url('job',str_replace(' ', '_',$job->title))}}">Apply</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif ($Category== "2")
<div class="jp_recent_resume_main_wrapper">
    <div class="container">
      <div class="row">
        @foreach ($profiles as  $profile)
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="jp_recent_resume_box_wrapper">
            <div class="jp_recent_resume_img_wrapper">
              <img src="{{asset($profile->image)}}" height="106" width="120" alt="resume_img" />
            </div>
            <div class="jp_recent_resume_cont_wrapper">
              <h3><a href="{{url('candidate',str_replace(' ', '_',$profile->name))}}">{{$profile->name}}</a></h3>
              <p><i class="fa fa-folder-open-o"></i>  <a href="#">{{$profile->professional}}</a>
              </p>
            </div>
            <div class="jp_rr_social_wrapper">
              <ul>
                @if($profile->url_fb)
                <li><a href="{{url('signup_login')}}"><i class="fa fa-facebook"></i></a>
                </li>
                @endif
                @if($profile->url_twitter)
                <li><a href="{{url('signup_login')}}"><i class="fa fa-twitter"></i></a>
                </li>
                @endif
                @if($profile->number)
                <li><a href="{{url('signup_login')}}"><i class="fa fa-whatsapp"></i></a>
                </li>
                @endif
                @if($profile->url_linkedin)
                <li><a href="{{url('signup_login')}}"><i class="fa fa-linkedin"></i></a>
                </li> 
                @endif
                @if($profile->address)
                <li><a href="https://www.google.com.sa/maps/search/{{$profile->address}}?hl=en"><i class="fa fa-map-marker"></i></a>
                </li>
                @endif
              </ul>
            </div>
            <div class="jp_rr_bottom_pera_wrapper">
              <p>                                {!! substr( $profile->social, 0, 230) !!}....
              </p>
            </div>
            <div class="jp_recent_resume_btn_wrapper">
              <ul>
                <li><a href="{{url('candidate',str_replace(' ', '_',$profile->name))}}">View Profile</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div> 
@else
<div class="jp_recent_resume_main_wrapper">
  <div class="container">
    <div class="row">
      @foreach ($services as $service)
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="jp_recent_resume_box_wrapper">
          <div class="jp_recent_resume_img_wrapper">
            <img src="{{asset($service->image)}}" height="106" width="120" alt="resume_img" />
          </div>
          <div class="jp_recent_resume_cont_wrapper">
            <h3><a href="{{url('service_provider',str_replace(' ', '_',$service->name))}}">{{$service->name}}</a></h3>
            {{-- <p><i class="fa fa-folder-open-o"></i>  <a href="#">{{$s_deposit->skill->name}}</a> --}}
            {{-- </p> --}}
                @if($service->address)
                <p><i class="fa fa-map-marker"></i>  <a href="https://www.google.com.sa/maps/search/{{$service->address}}">{{$service->address}}</</a>
              </p>
              @endif
          </div>
          <div class="jp_rr_social_wrapper">
            <ul>
              @if($service->phone)
              <li><a href="https://api.whatsapp.com/send?phone={{$service->phone}}"><i class="fa fa-whatsapp"></i></a>
              </li>
               <li><a href="tel:{{$service->phone}}"><i class="fa fa-phone"></i></a>
              </li>
              @endif
              @if($service->address)
              <li><a href="https://www.google.com.sa/maps/search/{{$service->address}}?hl=en"><i class="fa fa-map-marker"></i></a>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div> 
@endif
@endsection