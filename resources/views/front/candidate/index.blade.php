@extends('front.layout.index')

@section('title')

    <title>BROWSE CANDIDATE | JOB PORTAL</title>

@endsection

@section('contents')

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="front/assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>CANDIDATE PROFILES</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
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

@section('scripts')

@endsection