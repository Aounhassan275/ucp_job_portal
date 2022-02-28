@extends('candidate.layout.index')

@section('title')
    View Your Application Requests
@endsection

@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View All Application Requests</h5>
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
				<th class="text-center">Job Title</th>
				<th class="text-center">Institute Contact</th>
				<th class="text-center">Institute Name</th>
				<th class="text-center">Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (Auth::user()->applicants as $applicant)
			<tr>
				<td class="text-center">{{$applicant->job->title}}</td>
                <td class="text-center"><a href="https://api.whatsapp.com/send?phone={{$applicant->institute->phone}}"><img src="{{asset('whatsapp.png')}}" height="20" width="20" alt=""></a></td>
                <td class="text-center">{{$applicant->institute->name}}</td>
                <td class="text-center">
                   <p>Visit Your Hire Request Menu</p>
                </td>
            </tr>
            @endforeach	
        </tbody>
    </table>
</div>
@endsection