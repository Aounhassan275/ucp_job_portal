@extends('institute.layout.index')
@section('title')
    View Service Providers
@endsection
@section('content')
<div class="card">
	<div class="card-body">
		<h5 class="mb-3">Search Service Provider Through Skills</h5>

		<form method="GET">
			<div class="input-group mb-3">
				<div class="form-group-feedback form-group-feedback-left">
					<select data-placeholder="Services 'as'"  name="skill_id" id="skill-selector" class="form-control select-minimum" data-fouc required>
						<option value="">Select</option>
						@foreach (App\Models\Skill::all() as $key => $skill)
						<option value="{{$skill->id}}">{{$skill->name}}</option>
						@endforeach
					</select>     
				</div>
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary btn-lg">Search</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="row">
		@foreach ($s_deposits as $key => $s_deposit)
		<div class="col-xl-3 col-sm-6">
			<div class="card bg-teal-400" style="background-image: url({{asset('global_assets/images/backgrounds/panel_bg.png')}}); background-size: contain;">
				<div class="card-body text-center">
					<div class="card-img-actions d-inline-block mb-3">
						<img class="img-fluid rounded-circle" src="{{asset($s_deposit->service->image)}}" width="170" height="170" alt="">
						<div class="card-img-actions-overlay card-img rounded-circle">
							<a href="{{route('institute.service.show',$s_deposit->id)}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
								<i class="icon-link"></i>
							</a>
						</div>
					</div>
	
					<h6 class="font-weight-semibold mb-0">{{$s_deposit->service->name}}</h6>
					<span class="d-block opacity-75">{{$s_deposit->skill->name}}</span>
	
					<div class="list-icons list-icons-extended mt-3">
						<a href="https://api.whatsapp.com/send?phone={{$s_deposit->service->phone}}"><img src="{{asset('whatsapp.png')}}" height="20" width="20" alt=""></a>
						<a href="tel:{{$s_deposit->service->phone}}"><img src="{{asset('phone.png')}}" height="20" width="20" alt=""></a>
					<a href="{{$s_deposit->service->fb}}" class="list-icons-item text-white" data-popup="tooltip" title="Facebook" data-container="body"><i class="icon-facebook"></i></a>
					<a href="https://www.google.com.sa/maps/search/{{$s_deposit->service->address}}?hl=en"><img src="{{asset('location.png')}}" height="20" width="20" alt=""></a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
</div>
@endsection