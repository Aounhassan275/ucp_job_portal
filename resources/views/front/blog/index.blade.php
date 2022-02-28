@extends('front.layout.index')

@section('title')

    <title>BROWSE BLOG | JOB PORTAL</title>

@endsection

@section('contents')

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('front/assets/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>BLOGS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach (App\Models\Blog::all()->all() as $key => $blog)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{asset($blog->image)}}" height="770" width="385" alt="">
                                <a href="{{url('blogs',str_replace(' ', '_',$blog->title))}}" class="blog_item_date">
                                    <h3>{{Carbon\Carbon::parse($blog->created_at)->format('d')}}</h3>
                                    <p>{{Carbon\Carbon::parse($blog->created_at)->format('M')}}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('blogs',str_replace(' ', '_',$blog->title))}}">
                                    <h2>{{$blog->title}}</h2>
                                </a>
                                <p>{!! substr( $blog->description, 0, 230) !!}....</p>
                                <ul class="blog-info-link">
                                    <li><a href="{{url('blogs',str_replace(' ', '_',$blog->title))}}"><i class="fa fa-user"></i> {{$blog->bcategory->name}}</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                @foreach (App\Models\Category::all()->take(10) as $key => $category)
                                <li>
                                    <a href="{{url('category',str_replace(' ', '_',$category->name))}}" class="d-flex">
                                        <p>{{$category->name}} Job</p>
                                        {{-- <p>(37)</p> --}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection

@section('scripts')

@endsection