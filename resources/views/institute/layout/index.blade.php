<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{Auth::user()->name}} | INSTITUTE PANEL | JOB PORTAL</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/toastr.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>

	<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/form_select2.js')}}"></script>

	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    
	<script src="{{asset('global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/datatables_basic.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/form_layouts.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/dashboard.js')}}"></script>
	<!-- /theme JS files -->
	
	<!-- Theme JS files -->
	<script src="{{asset('global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/editor_summernote.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/job_list.js')}}"></script>

	<!-- /theme JS files -->

	@yield('styles')
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
		    	<a href="{{url('/')}}" class="text-light">
				<h3 class="m-0"><b>Institute Panel Menu</h3>
    <!--            <img src="{{asset('2.jpeg')}}" style="width: 207px;-->
    <!--height: 46px;" alt="">-->
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user">
					<a href="" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="" class="rounded-circle mr-2" height="34" alt="">
						<span>{{Auth::user()->name}}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{route('institute.logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="{{asset(Auth::user()->image)}}"><img src="{{asset(Auth::user()->image)}}" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<a href="{{route('institute.profile.show')}}">
									<div class="media-title font-weight-semibold">{{Auth::user()->name}}</div>
								</a>
								<div class="font-size-xs opacity-50">OTLP Inc.
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="{{route('institute.profile.index')}}" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
						{{-- @if (Auth::user()->type == '1') --}}
							<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Institute Panel</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="{{route('institute.dashboard.index')}}" class="nav-link {{Request::is('institute.dashboard.index')?'active':''}}">
								<i class="icon-home4"></i>
								<span>Dashboard</span>
							</a>
						</li>
						@if (Auth::user()->checkstatus() =='expired')

						@else
						<li class="nav-item">
							<a href="{{route('institute.job.browse_job')}}" class="nav-link {{Request::is('candidate.job.browse_job')?'active':''}}">
								<i class="icon-folder-plus"></i>
								<span>Browse Job</span>
							</a>
						</li>	
						<li class="nav-item">
							<a href="{{route('institute.candidate.index')}}" class="nav-link {{Request::is('institute.candidate.index')?'active':''}}">
								<i class="icon-folder-plus"></i>
								<span>Browse Candidate</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('institute.hire.index')}}" class="nav-link {{Request::is('institute.candidate.index')?'active':''}}">
								<i class="icon-folder-plus"></i>
								<span>Candidate Hire Request</span>
								<span class="badge bg-success-400 align-self-center ml-auto">{{Auth::user()->hire()}}</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('institute.applicant.index')}}" class="nav-link {{Request::is('institute.candidate.index')?'active':''}}">
								<i class="icon-folder-plus"></i>
								<span>Candidate Application Request</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('institute.job.create')}}" class="nav-link {{Request::is('institute.job.create')?'active':''}}">
								<i class="icon-user"></i>
								<span>Create Job</span>
							</a>
						</li>	
						<li class="nav-item">
							<a href="{{route('institute.job.index')}}" class="nav-link {{Request::is('institute.job.index')?'active':''}}">
								<i class="icon-user"></i>
								<span>Manage Job</span>
							</a>
						</li>		
						@endif
						<li class="nav-item">
							<a href="{{route('institute.i_withdraw.create')}}" class="nav-link {{Request::is('institute.i_withdraw.create')?'active':''}}">
								<i class="icon-stack2"></i>
								<span>Create Withdraw</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('institute.i_withdraw.index')}}" class="nav-link {{Request::is('institute.i_withdraw.index')?'active':''}}">
								<i class="icon-mail-read"></i>
								<span>Withdraw History</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('institute.refer.index')}}" class="nav-link {{Request::is('institute.refer.index')?'active':''}}">
								<i class="icon-user"></i>
								<span>Refer</span>
							</a>
						</li>	
						@if(Auth::user()->a_date)
						
						@else 
						<li class="nav-item">
							<a href="{{route('institute.i_deposit.create')}}" class="nav-link {{Request::is('institute.i_deposit.create')?'active':''}}">
								<i class="icon-stack3"></i>
								<span>Register Yourself</span>
							</a>
						</li>
						@endif
						<li class="nav-item">
							<a href="{{route('institute.profile.index')}}" class="nav-link {{Request::is('institute.profile.index')?'active':''}}">
								<i class="icon-stack3"></i>
								<span>Account Setting</span>
							</a>
						</li>
					
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><a href="{{route('institute.dashboard.index')}}"><i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold">@yield('title')</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">

							<a href="#" class="btn btn-float mt-3">
								<h4><span id="ct" class="font-weight-semibold"></span></h4>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				@yield('content')

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text ml-lg-auto">
						
					</span>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<script src="{{asset('assets/js/toastr.js')}}"></script>
	@toastr_render
	@yield('scripts')
</body>
</html>
