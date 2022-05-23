@extends('institute.layout.index')

@section('title')
    Browse job
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
				<th>Job Type</th>
				<th>Job Category</th>
				<th>Job Location</th>
				<th>Job Salary</th>
				<th>Job Update</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (App\Models\Job::where('status','Approved')->get() as $key => $job)
			<tr>
				<td>{{$job->title}}</td>
				<td>{{$job->type}}</td>
				<td>{{$job->category->name}}</td>
				<td>{{$job->location}}</td>
				<td>PKR {{$job->salary}}</td>
				<td>{{Carbon\Carbon::parse($job->created_at)->format('d/m/Y')}}</td>
            </tr>
            @endforeach	
        </tbody>
    </table>
</div>

@endsection