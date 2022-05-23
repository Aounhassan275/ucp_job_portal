@extends('admin.layout.index')

@section('title')
    Job
@endsection

@section('content')

<!-- Cards layout -->
@foreach (App\Models\Job::all() as $key => $job)
    
<div class="card card-body">
    <div class="media flex-column flex-sm-row">
        <div class="mr-sm-3 mb-2 mb-sm-0">
            <a href="#">
                <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" class="rounded" width="44" height="44" alt="">
            </a>
        </div>

        <div class="media-body">
            <h6 class="media-title font-weight-semibold">
            <a href="#">{{$job->title}}</a>
            </h6>

            <ul class="list-inline list-inline-dotted text-muted mb-2">
                <li class="list-inline-item"><a href="#" class="text-muted">{{$job->type}}</a></li>
                <li class="list-inline-item">{{$job->location}}</li>                
                <li class="list-inline-item">{{$job->qualification}}</li>      
                @if($job->salary)
                <li class="list-inline-item">{{$job->salary}}</li>
                @else
                <li class="list-inline-item">{{$job->salary}}</li>
                @endif
                <li class="list-inline-item">{{$job->category->name}}</li>
                <li class="list-inline-item">{{$job->institute->name}}</li>
                <li class="list-inline-item">
                    @if($job->status=="Approved")
                    <span class="badge badge-success">{{$job->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$job->status}}</span>
                    @endif                </li>
            </ul>

            {{$job->summary}}
        </div>

        <div class="ml-sm-3 mt-2 mt-sm-0">
            <a href="{{route('admin.job.approved',$job->id)}}"><button class="btn btn-success">Approved</button></a>
        </div>
        <div class="ml-sm-3 mt-2 mt-sm-0">
             <a href="{{route('admin.job.delete',$job->id)}}"><button class="btn btn-danger">Delete</button></a>
        </div>
    </div>
</div>
@endforeach


@endsection
