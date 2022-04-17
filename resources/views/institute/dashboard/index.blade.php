@extends('institute.layout.index')

@section('title')
    INSITUTE DASHBAORD
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('institute.job.browse_job')}}">
            <div class="card card-body bg-teal-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{App\Models\Job::all()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Browse Jobs</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-xl-6">
        <a href="{{route('institute.candidate.index')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{App\Models\Profile::approved()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Candidate Profile</span>
                    </div>
                </div>
            </div>
        </a>
	</div>
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('institute.job.index')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">
                    <div class="media-body"> 
                    <h3 class="mb-0">{{Auth::user()->jobs->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Manage Jobs</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection