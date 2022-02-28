@extends('front.layout.index')
@section('title')
    <title>{{Auth::user()->name}} PROFILE | JOB PORTAL</title>
@JOB PORTAL
@section('contents')
<div class="jp_tittle_main_wrapper">
	<div class="jp_tittle_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="jp_tittle_heading_wrapper">
					<div class="jp_tittle_heading">
						<h2>YOUR PROFILE</h2>
					</div>
					<div class="jp_tittle_breadcrumb_main_wrapper">
						<div class="jp_tittle_breadcrumb_wrapper">
							<ul>
								<li><a href="{{route('institute.dashboard.index')}}">Go Back to dashboard</a> <i class="fa fa-angle-right"></i></li>
								<li>{{Auth::user()->name}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="jp_listing_sidebar_main_wrapper">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="tab-content">
                          <div id="grid" class="tab-pane fade in active">
                              <div class="row">

                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                      <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                          <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                              <div class="row">
                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <div class="jp_job_post_side_img">
                                                          <img src="{{asset(Auth::user()->image)}}" height="100" width="95"  alt="post_img" />
                                                      </div>
                                                      <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                      <h4>{{Auth::user()->name}}</h4>
                                                          {{-- <p>{{$institute->email}}</p> --}}
                                                          <ul>
                                                          <li><a href="https://www.google.com.sa/maps/search/{{Auth::user()->address}}?hl=en"><i class="fa fa-map-marker"></i>&nbsp; {{Auth::user()->address}}</a></li>
                                                          </ul>
                                                          <div class="">
                                                            <ul>
                                                              <li><a href="https://api.whatsapp.com/send?phone={{Auth::user()->phone}}"><i class="fa fa-whatsapp"></i> &nbsp; Message Institute </a></li>
                                                            </ul>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="jp_job_post_keyword_wrapper">
                                              <ul>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          
      </div>
  </div>
</div>

@endsection