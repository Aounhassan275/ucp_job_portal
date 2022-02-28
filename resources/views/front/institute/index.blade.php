@extends('front.layout.index')
@section('title')
    <title>BROWSE INSTITUTE | JOB PORTAL</title>
@endsection
@section('css')

@endsection
@section('contents')
<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('front/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>BROWSE INSTITUTE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-services section-pad-t30">
    <div class="container">
        <div class="row d-flex justify-contnet-center">
            @foreach (App\Models\Institute::all() as $key => $institute)
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
@endsection