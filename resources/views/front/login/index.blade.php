@extends('front.layout.index')
@section('title')
    <title>SIGN UP - LOGIN | JOB PORTAL</title>
@endsection
@section('contents')
<div class="jp_tittle_main_wrapper">
	<div class="jp_tittle_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="jp_tittle_heading_wrapper">
					<div class="jp_tittle_heading">
						<h2>SIGN UP AND LOGIN </h2>
					</div>
					<div class="jp_tittle_breadcrumb_main_wrapper">
						<div class="jp_tittle_breadcrumb_wrapper">
							<ul>
								<li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>
								<li>SIGN UP & LOGIN</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="jp_register_section_main_wrapper">
		<div class="jp_regis_left_side_box_wrapper">
			<div class="jp_regis_left_side_box">
				<img src="front/images/content/regis_icon.png" alt="icon" />
				<h4>I’m an INSTITUTE</h4>
				<p>Signed Up as a company and enable to post new<br> job offers, searching for candidate...</p>
				<ul>
					<li><a href="{{route('institute.register')}}"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
				</ul>
			</div>
		</div>
		<div class="jp_regis_right_side_box_wrapper">
			<div class="jp_regis_right_img_overlay"></div>
			<div class="jp_regis_right_side_box">
				<img src="front/images/content/regis_icon2.png" alt="icon" />
				<h4>I’m a candidate</h4>
				<p>Signed Up as Candidate and enable to post new<br> CV, searching for Job...</p>
				<ul>
					<li><a href="{{route('candidate.register')}}"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS CANDIDATE</a></li>
				</ul>
			</div>
			<div class="jp_regis_center_tag_wrapper">
				<p>OR</p>
			</div>
		</div>

	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="jp_register_section_main_wrapper">
		<div class="jp_regis_left_side_box_wrapper">
			<div class="jp_regis_left_side_box">
				<img src="front/images/content/regis_icon.png" alt="icon" />
				<h4>I’m a Service Provider</h4>
				<p>Signed Up as a Service Provider and enable to get new<br> Work...</p>
				<ul>
					<li><a href="{{route('service.register')}}"><i class="fa fa-plus-circle"></i> &nbsp;SIGN UP</a></li>
				</ul>
			</div>
		</div>
		<div class="jp_regis_right_side_box_wrapper">
			<div class="jp_regis_right_img_overlay"></div>
			<div class="jp_regis_right_side_box">
				<img src="front/images/content/regis_icon2.png" alt="icon" />
				<h4>I’m a Member</h4>
				<p>Signed Up as Member Of Our Site and enable to<br> Perform All Functions</p>
				<ul>
					<li><a href="{{url('member/login')}}"><i class="fa fa-plus-circle"></i> &nbsp;LOGIN</a></li>
				</ul>
			</div>
			<div class="jp_regis_center_tag_wrapper">
				<p>OR</p>
			</div>
		</div>

	</div>
</div>
@endsection