@extends('institute.layout.index')

@section('title')
    INSITUTE DASHBAORD
@endsection

@section('content')
@if (Auth::user()->checkstatus() =='expired')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="card card-body">
            <div class="media mb-3">
                <div class="mr-3 align-self-center">
                    <i class="icon-pulse2 icon-2x text-success-400 opacity-75"></i>
                </div>

                <div class="media-body">
                    <h6 class="font-weight-semibold mb-0">Note:</h6>
                    Kindly Resubscribe Your Account.
                </div>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-xl-6">
        <a href="{{url('#')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">PKR {{number_format(Auth::user()->balance, 2)}}</h3>
                        <span class="text-uppercase font-size-xs">Available Balance</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-coin icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @if(Auth::user()->a_date)
    <div class="col-sm-6 col-xl-6">
        <a href="{{url('#')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{Carbon\Carbon::today()->diffInDays(Auth::user()->a_date)}}</h3>
                        <span class="text-uppercase font-size-xs">Subscription Days</span>
                    </div>
                    <div class="ml-3 align-self-center">
                        <i class="icon-coin icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endif
    
    <div class="col-sm-6 col-xl-6">
        <a href="{{url('#')}}">
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
        <a href="{{url('#')}}">
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
        <a href="{{url('#')}}">
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
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('institute.i_withdraw.index')}}">
            <div class="card card-body bg-purple-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">PKR {{Auth::user()->i_withdraws->sum('amount')}}</h3>
                        <span class="text-uppercase font-size-xs">Total Withdraw</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@else
@if(Auth::user()->a_date)
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="card card-body">
            <div class="media mb-3">
                <div class="mr-3 align-self-center">
                    <i class="icon-pulse2 icon-2x text-success-400 opacity-75"></i>
                </div>

                <div class="media-body">
                    <h6 class="font-weight-semibold mb-0">Note:</h6>
                        After {{(90-Carbon\Carbon::today()->diffInDays(Auth::user()->a_date))}}  Days your Subscription For Institute Panel Got Expire.
                </div>
            </div>

        </div>
    </div>
</div> 
@endif
<div class="row">
    <div class="col-sm-6 col-xl-6">
        <a href="{{url('#')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">PKR {{number_format(Auth::user()->balance, 2)}}</h3>
                        <span class="text-uppercase font-size-xs">Available Balance</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-coin icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @if(Auth::user()->a_date)
    <div class="col-sm-6 col-xl-6">
        <a href="{{url('#')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{Carbon\Carbon::today()->diffInDays(Auth::user()->a_date)}}</h3>
                        <span class="text-uppercase font-size-xs">Subscription Days</span>
                    </div>
                    <div class="ml-3 align-self-center">
                        <i class="icon-coin icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endif
    
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
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('institute.i_withdraw.index')}}">
            <div class="card card-body bg-purple-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">PKR {{Auth::user()->i_withdraws->sum('amount')}}</h3>
                        <span class="text-uppercase font-size-xs">Total Withdraw</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endif
@endsection