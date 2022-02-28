@extends('front.layout.index')

@section('title')

<title>INSTITUTE RESET PASSWORD | OTPL </title>

@endsection

@section('contents')
	  <!-- jp Tittle Wrapper Start -->
	  <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>INSTITUTE RESET PASSWORD</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>INSTITUTE RESET PASSWORD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
	<div class="login_section">
		<!-- login_form_wrapper -->
		<div class="login_form_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- login_wrapper -->
						<h1>RESET PASSWORD</h1>
						<div class="login_wrapper">
							<form class="login-form"  action="{{route('institute.resetPassword')}}" method="POST">
								@csrf
									<div class="formsix-pos">
										<div class="form-group i-email">
											<input type="text" name="verification" class="form-control"  id="email2" placeholder="Enter Verification Code*">
										</div>
									</div>
									<div class="formsix-e">
										<div class="form-group i-password">
											<input type="password" class="form-control" name="password" required="" id="password2" placeholder="Password *">
										</div>
									</div>
									<div class="login_btn_wrapper">
										<button class="btn btn-primary login_btn" type="submit"> Login </button>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.login_form_wrapper-->
	</div>
@endsection