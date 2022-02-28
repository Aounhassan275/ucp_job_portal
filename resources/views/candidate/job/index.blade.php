@extends('candidate.layout.index')

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
                <th>#</th>
                <th>Job Title</th>
                <th>Job Type</th>
                <th>Job Category</th>
                <th>Job Salary</th>
                <th>Job Location</th>
                <th>Apply</th>
            </tr> 
        </thead>
        <tbody>
			@foreach ($jobs as $key => $job)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$job->title}}</td>
                <td>{{$job->type}}</td>
                <td>{{$job->category->name}}</td>
                <td>PKR {{$job->salary}}</td>
				<td>{{$job->location}}</td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('candidate.job.show',$job->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i>Apply</a>
                                {{-- <a href="{{route('candidate.candidate.delete',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Delete</a>
                                <a href="{{route('admin.candidate.block',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Block</a>
                                <a href="{{route('admin.candidate.active',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Active</a>
                            </div> --}}
                        </div>
                    </div>
				</td>
			
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
