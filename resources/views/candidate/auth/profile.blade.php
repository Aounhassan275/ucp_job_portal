@extends('front.layout.index')

@section('title')

    <title>{{Auth::user()->name}} PROFILES | JOB PORTAL</title>
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
						<h2>{{Auth::user()->name}} PROFILES</h2>
					</div>
					<div class="jp_tittle_breadcrumb_main_wrapper">
						<div class="jp_tittle_breadcrumb_wrapper">
							<ul>
								<li><a href="{{route('candidate.dashboard.index')}}">Go Back to Dashboard</a> <i class="fa fa-angle-right"></i></li>
								<li>{{Auth::user()->name}} PROFILES</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="jp_recent_resume_main_wrapper">
  <div class="container">
    <div class="row">
        @foreach (Auth::user()->profiles as $key => $profile)
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





@endsection

@section('scripts')
    <script src="{{asset('front/js/custom_iv.js')}}"></script>

@endsection