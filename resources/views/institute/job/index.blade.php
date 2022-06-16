@extends('institute.layout.index')

@section('title')
    View Jobs
@endsection

@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View All Jobs</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <table class="table  datatable-basic datatable-row-basic">
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Job Location</th>
                <th>Job Status</th>
                <th>Action</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (Auth::user()->jobs as $job)
            <tr>
				<td >{{$job->title}}</td>
				<td >{{$job->location}}</td>
				<td >
                    @if($job->status=="Approved")
                    <button class="button btn-success">{{$job->status}}</button>
                    @else
                    <button class="button btn-danger">{{$job->status}}</button>
					@endif   
				</td>
                <td>
                    <form action="{{route('institute.job.destroy',$job->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
								<a href="{{route('institute.job.edit',$job->id)}}" class="dropdown-item"><i class="fa fa-pencil"></i>Edit</a>
								<a href="{{route('institute.job.show',$job->id)}}" class="dropdown-item"><i class="fa fa-pencil"></i>View Detail</a>
								{{-- <a href="{{route('institute.job.destroy',$job->id)}}" class="dropdown-item"><i class="fa fa-remove"></i> Delete</a>
                                <a href="{{route('candidate.candidate.delete',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Delete</a>
                                <a href="{{route('admin.candidate.block',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Block</a>
                                <a href="{{route('admin.candidate.active',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Active</a> --}}
                            </div>
                        </div>
                    </div>
				</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection