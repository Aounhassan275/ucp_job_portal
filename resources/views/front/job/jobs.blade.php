@extends('front.layout.index')
@section('title')
    <title>BROWSE JOB | JOB PORTAL</title>
@endsection
@section('css')

@endsection
@section('contents')
<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="front/assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Get your job</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!-- Job List Area Start -->
<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <!-- Right content -->
            <div class="col-xl-12 col-lg-12 col-md-12">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
                        <!-- single-job-content -->
                        @foreach($jobs as $job)
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
                                        <li>{{$job->salary}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{url('job',str_replace(' ', '_',$job->title))}}">{{$job->type}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
<!-- Job List Area End -->
@endsection