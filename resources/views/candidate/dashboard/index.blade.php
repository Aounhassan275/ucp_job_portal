@extends('candidate.layout.index')

@section('title')
    Candidate Dashboard
@endsection

@section('content')
<div class="row">
    
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('candidate.job.index')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
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
        <a href="{{route('candidate.profile.index')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{Auth::user()->profiles->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Manage CV</span>
                    </div>
                </div>
            </div>
        </a>
	</div>
   <div class="col-sm-6 col-xl-6">
        <a href="{{route('candidate.hire.index')}}">
            <div class="card card-body bg-teal-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{Auth::user()->hires->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Hire Request</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
 
@endsection