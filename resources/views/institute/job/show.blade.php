@extends('institute.layout.index')

@section('title')
	View Jobs
@endsection

@section('content')
<!-- Details -->
<div class="card">
	<div class="card-body">
		<div class="media flex-column flex-md-row mb-4">
			<a href="#" class="align-self-md-center mr-md-3 mb-2 mb-md-0">
				<img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" class="rounded" width="44" height="44" alt="">
			</a>

			<div class="media-body">
				<h5 class="media-title font-weight-semibold">{{$job->title}}</h5>
				<ul class="list-inline list-inline-dotted text-muted mb-0">
					<li class="list-inline-item">{{$job->location}}</li>
					<li class="list-inline-item">{{$job->category->name}}</li>
					<li class="list-inline-item">{{$job->type}}</li>
					<li class="list-inline-item">{{$job->qualification}}</li>
					@if($job->salary)
					<li class="list-inline-item">{{$job->salary}}</li>
					@else 
					<li class="list-inline-item">{{$job->salary1}}</li>
					@endif
				</ul>
			</div>

			<div class="align-self-md-center ml-md-3 mt-2 mt-md-0">
				<a href="#" class="btn bg-success"><i class="icon-envelop2 mr-2"></i>{{$job->status}}</a>
			</div>
		</div>

		<div class="mb-4">
			<h6 class="font-weight-semibold">Job Description</h6>

			<p>{!! $job->summary !!}</p>
		</div>

		{{-- <div class="d-sm-flex">
			<a href="#" class="btn bg-blue">
				<i class="icon-envelop2 mr-2"></i>
				Apply for this job
			</a>

			<div class="ml-sm-auto mt-2 mt-sm-0">
				<a href="#" class="btn btn-light">
					<i class="icon-checkmark3 mr-2"></i>
					Save this job
				</a>
			</div>

			<div class="ml-sm-3 mt-2 mt-sm-0">
				<a href="#" class="btn btn-light">
					<i class="icon-share4 mr-2"></i>
					Share
				</a>
			</div>
		</div> --}}
	</div>
</div>
<!-- /details -->
@endsection