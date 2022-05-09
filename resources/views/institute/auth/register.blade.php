
@extends('front.layout.index')
@section('title')
    <title>INSTITUTE REGISTER | JOB PORTAL</title>
@endsection
@section('contents')

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('front/assets/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Institute Register</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Hero Area End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="{{route('institute.institute.store')}}"  method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="hidden" value="{{$code ?? ''}}" name="code">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="password" id="email" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="confirm_password" id="email" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="address" id="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                            <p>Already a member? <a href="{{route('institute.login')}}" style="color:black;"> Login Here </a> </p>
                            <div class="form-group mt-3 text-right">
                                <button type="submit" class="button button-contactForm boxed-btn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    <footer>
  
@endsection