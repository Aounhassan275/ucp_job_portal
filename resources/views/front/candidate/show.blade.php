@extends('front.layout.index')
@section('title')
    <title>{{$profile->name}} | JOB PORTAL</title>
    <meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{!! $profile->name !!} | {{$profile->professional}} | {{$profile->fname}} | {{$profile->qualification}}" />
	<meta property="og:description" content="{!! $profile->social !!}" />
	<meta property="og:url" content="{{Request::url()}}" />
	<meta property="og:site_name" content="JOBPORTAL.PK" />
	<meta property="article:publisher" content="https://facebook.com/JOBPORTAL" />
	<meta property="og:image" content="{{asset($profile->image)}}" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="{!! $profile->name !!} | {{$profile->professional}} | {{$profile->fname}} | {{$profile->qualification}}"" />
	<meta name="twitter:description" content="{!! $profile->social !!}" />
	<meta name="twitter:image" content="{{asset($profile->image)}}" />
@endsection
@section('contents')
  <!-- Hero Area Start-->
  <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('front/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{$profile->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{asset($profile->image)}}" style="height: 85px;width:85px;" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$profile->name}}</h4>
                                </a>
                                <ul>
                                    <li>{{$profile->professional}}</li>
                                    <li>{{$profile->qualification}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->
                   
                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Soical Activity</h4>
                            </div>
                            <p>{{$profile->social}}</p>
                        </div>
                        @if($profile->job_title)
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Past Experience</h4>
                            </div>
                           <ul>
                               <li>Job Title : {{$profile->job_title}}</li>
                           </ul>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Description</h4>
                            </div>
                            <p>{{$profile->job_description}}</p>
                        </div>
                        @endif
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Profile Overview</h4>
                       </div>
                      <ul>
                          <li>Full Name : <span>{{$profile->name}}</span></li>
                          <li>Father Name : <span>{{$profile->fname}}</span></li>
                          <li>Address : <span>{{$profile->address}}</span></li>
                          <li>CNIC No. : <span>*****-*******-*</span></li>
                          <li>Passing Date :  
                            @if($profile->p_date)
                            <span>{{$profile->p_date}}</span>
                            @else
                            <span>__________</span>
                            @endif
                          </li>
                      </ul>
                     <div class="apply-btn2">
                        <a href="{{url('candidate/login')}}" class="btn">Apply Now</a>
                     </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection