@extends('candidate.layout.index')

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
					<li class="list-inline-item">{{$job->salary}}</li>
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

		<div class="d-sm-flex">
			<a href="#edit_modal" data-toggle="modal" data-target="#edit_modal" class="btn bg-blue">
				<i class="icon-envelop2 mr-2"></i>
				Apply for this job
			</a>
			{{-- <button data-toggle="modal" data-target="#edit_modal" name="{{$category->name}}" price="{{$category->price}}"
				id="{{$category->id}}" class="edit-btn btn btn-primary">Edit</button> --}}

			{{-- <div class="ml-sm-auto mt-2 mt-sm-0">
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
			</div> --}}
		</div>
	</div>
</div>
<!-- /details -->
<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
		<form action="{{route('candidate.applicant.store')}}" method="post" enctype="multipart/form-data">
			@csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
						<label for="title">Description</label>
						<textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
					<input class="form-control" type="hidden"  name="candidate_id" value="{{Auth::user()->id}}" required>
					<input class="form-control" type="hidden"  name="job_id" value="{{$job->id}}" required>
					<input class="form-control" type="hidden"  name="institute_id" value="{{$job->institute->id}}" required>
					</div>
					<div class="form-group">
						<label for="title">Select Your Profile</label>
						<select name="profile_id" class="form-control" required>
							<option value="">Select</option>
							@foreach (Auth::user()->profiles as $profile)
							<option value="{{$profile->id}}">{{$profile->name}}</option>
							@endforeach
						</select> 
				 </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Apply</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection