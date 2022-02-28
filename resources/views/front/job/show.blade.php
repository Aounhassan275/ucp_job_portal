@extends('front.layout.index')
@section('title')
<title>{{$job->title}} | JOB PORTAL</title>
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{!! $job->title !!} | {{$job->type}} | {{$job->location}} | {{$job->city}}" />
<meta property="og:description" content="{!! $job->summary !!}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="OTPL.PK" />
<meta property="article:publisher" content="https://facebook.com/otpl_pk" />
<meta property="og:image" content="{{asset($job->institute->image)}}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{!! $job->title !!} | {{$job->type}} | {{$job->location}} | {{$job->city}}"" />
<meta name="twitter:description" content="{!! $job->summary !!}" />
<meta name="twitter:image" content="{{asset($job->institute->image)}}" />
@endsection
@section('contents')
  <!-- Hero Area Start-->
  <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('front/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{$job->title}}</h2>
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
                                <a href="#"><img src="{{asset($job->institute->image)}}" style="height: 85px;width:85px;" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$job->title}}</h4>
                                </a>
                                <ul>
                                    <li>{{$job->category->name}}</li>
                                    @if($job->salary)
                                    <li>{{$job->salary}}</li>
                                    @else 
                                    <li>{{$job->salary1}}</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->
                   
                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Summary</h4>
                            </div>
                            <p>{{$job->summary}}</p>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Job Overview</h4>
                       </div>
                      <ul>
                          <li>Job Type : <span>{{$job->type}}</span></li>
                          <li>Job Location : <span>{{$job->location}}</span></li>
                          <li>Job City : <span>{{$job->city}}</span></li>
                          <li>Job Qualification : <span>{{$job->qualification}}</span></li>
                     <div class="apply-btn2">
                        <a href="{{url('candidate/login')}}" class="btn">Apply Now</a>
                     </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection