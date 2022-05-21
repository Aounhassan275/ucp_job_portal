@extends('institute.layout.index')

@section('title')
    View Candidates
@endsection

@section('content')
<div class="row">
	@foreach ($profiles as $key => $profile)
	@if($profile->candidate->status == 'active')
	<div class="col-xl-3 col-sm-6">
		<div class="card bg-teal-400" style="background-image: url({{asset('global_assets/images/backgrounds/panel_bg.png')}}); background-size: contain;">
			<div class="card-body text-center">
				<div class="card-img-actions d-inline-block mb-3">
					<img class="img-fluid rounded-circle" src="{{asset($profile->image)}}" width="170" height="170" alt="">
					<div class="card-img-actions-overlay card-img rounded-circle">
						<a href="{{route('institute.candidate.show',$profile->id)}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
							<i class="icon-link"></i>
						</a>
					</div>
				</div>

				<h6 class="font-weight-semibold mb-0">{{$profile->name}}</h6>
				<span class="d-block opacity-75">{{$profile->professional}}</span>

				<div class="list-icons list-icons-extended mt-3">
					@if($profile->number)
					<a href="https://api.whatsapp.com/send?phone={{$profile->number}}"><img src="{{asset('whatsapp.png')}}" height="20" width="20" alt=""></a>
					@endif
					@if($profile->url_twitter)
					<a href="{{$profile->url_twitter}}" class="list-icons-item text-white" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
					@endif
					@if($profile->url_fb)
				<a href="{{$profile->url_fb}}" class="list-icons-item text-white" data-popup="tooltip" title="Facebook" data-container="body"><i class="icon-facebook"></i></a>
					@endif
					@if($profile->address)
				<a href="https://www.google.com.sa/maps/search/{{$profile->address}}?hl=en"><img src="{{asset('location.png')}}" height="20" width="20" alt=""></a>
					@endif
					@if($profile->url_linkedin)
				<a href="{{url($profile->url_linkedin)}}"><img src="{{asset('linkedin.png')}}" height="20" width="20" alt=""></a>
					@endif
				</div>
			</div>
		</div>
	</div>
	@endif
@endforeach
</div>
@endsection