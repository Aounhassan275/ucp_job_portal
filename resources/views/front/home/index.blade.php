@extends('front.layout.index')
@section('title')
    <title>HOME | JOB PORTAL</title>
@endsection
@section('contents')
    
         <!-- slider Area Start-->
         <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('front/assets/img/hero/h1_hero.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Find the most exciting startup jobs</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- form -->
                                <form action="{{url('search')}}" method="GET" class="search-box">
                                    <div class="input-form col-4">
                                        <input type="text" name="keyword" placeholder="Job Title or keyword">
                                    </div>
                                    <div class="input-form col-4">
                                        <input type="text" name="location" placeholder="Location ">
                                    </div>
                                    <div class="input-form col-4">
                                        <button type="submit" class="btn btn-primary"> Find job</button>
                                    </div>	
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        <!-- slider Area End-->
        
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Trending Jobs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        @foreach (App\Models\Job::where('status','Approved')->orderby('view','desc')->get()->take(6) as $key => $job)
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{url('job',str_replace(' ', '_',$job->title))}}"><img src="{{asset($job->institute->image)}}" style="    width: auto;
                                        height: 115px;"  alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="{{url('job',str_replace(' ', '_',$job->title))}}"><h4>{{$job->title}}</h4></a>
                                    <ul>
                                        <li>{{$job->qualification}}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$job->city}}</li>
                                        @if($job->salary)
                                        <li>{{$job->salary}}</li>
                                        @else 
                                        <li>{{$job->salary1}}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{url('job',str_replace(' ', '_',$job->title))}}">{{$job->type}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Services Start -->
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Browse Top Institute </h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    @foreach (App\Models\Institute::all()->take(8) as $key => $institute)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="{{url('institute/login')}}">{{$institute->name}}</a></h5>
                                <span>({{$institute->status}})</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- More Btn -->
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="{{asset('front/assets/img/gallery/cv_bg.jpg')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">FEATURED New Jobs</p>
                            <p class="pera2"> Make a CV with Your Online!</p>
                            <a href="{{url('candidate/login')}}" class="border-btn2 border-btn4">Post CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->
        <!-- Featured_job_start -->
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Recent Job</span>
                            <h2>Featured Jobs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        @foreach (App\Models\Job::where('status','Approved')->orderby('created_at','desc')->get()->take(6) as $key => $job)
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="{{url('job',str_replace(' ', '_',$job->title))}}"><img src="{{asset($job->institute->image)}}" style="    width: auto;
                                        height: 115px;"  alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="{{url('job',str_replace(' ', '_',$job->title))}}"><h4>{{$job->title}}</h4></a>
                                    <ul>
                                        <li>{{$job->qualification}}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$job->city}}</li>
                                        @if($job->salary)
                                        <li>{{$job->salary}}</li>
                                        @else 
                                        <li>{{$job->salary1}}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{url('job',str_replace(' ', '_',$job->title))}}">{{$job->type}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="{{asset('front/assets/img/gallery/how-applybg.png')}}">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Apply process</span>
                            <h2> How it works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Search a job</h5>
                               <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. Apply for job</h5>
                               <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. Get your job</h5>
                               <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- How  Apply Process End-->
         <!-- Support Company Start-->
         <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>What we are doing</span>
                                <h2>24k Talented people are getting Jobs</h2>
                            </div>
                            <div class="support-caption">
                                <a href="{{url('institute/login')}}" class="btn post-btn">Post a job</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="{{asset('front/assets/img/service/support-img.jpg')}}" alt="">
                            <div class="support-img-cap text-center">
                                <p>Since</p>
                                <span>1994</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
        <!-- Blog Area Start -->
        <div class="home-blog-area blog-h-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Our latest CV's</span>
                            <h2>Our Candidates</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach (App\Models\Profile::where('profile','Approved')->orderby('created_at','desc')->get()->take(8) as $key => $profile)
                    @if($profile->candidate->status == 'active')
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{asset($profile->image)}}" style="width:579px;height:324px;" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>{{$profile->professional}}</p>
                                    <h3><a href="{{url('candidate',str_replace(' ', '_',$profile->name))}}">{{$profile->name}}</a></h3>
                                    <a href="{{url('candidate',str_replace(' ', '_',$profile->name))}}" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
@endsection