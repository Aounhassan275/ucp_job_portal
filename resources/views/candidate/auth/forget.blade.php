@extends('front.layout.index')

@section('title')

<title>CANDIDATE FORGET PASSWORD | JOB PORTAL </title>

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
                            <h2>CANDIDATE FORGET PASSWORD</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>CANDIDATE FORGET PASSWORD</li>
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
						<h1>SEND VERIFICATION CODE</h1>
						<div class="login_wrapper">
							<form class="login-form"  action="{{route('candidate.verification')}}" method="POST">
								@csrf
									<div class="formsix-pos">
										<div class="form-group i-email">
											<input type="email" name="email" class="form-control"  id="email2" placeholder="Email Address*">
										</div>
									</div>
									<div class="login_btn_wrapper">
										<button class="btn btn-primary login_btn" type="submit"> Send Verification Code </button>
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