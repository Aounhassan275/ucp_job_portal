@extends('institute.layout.index')

@section('title')
    View Candidates Applicants
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View All Candidate Applicantion</h5>
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
				<th class="text-center">Applicant Name</th>
				<th class="text-center">Applicant Whatsapp Contact</th>
				<th class="text-center">Applicant Email Address</th>
				<th class="text-center">Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (Auth::user()->applicants as $applicant)
			<tr>
				<td class="text-center">{{$applicant->job->title}}</td>
				<td class="text-center">{{$applicant->profile->name}}</td>
                <td class="text-center"><a href="https://api.whatsapp.com/send?phone={{$applicant->profile->number}}"><img src="{{asset('whatsapp.png')}}" height="20" width="20" alt=""></a></td>
                <td class="text-center">{{$applicant->profile->email}}</td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('institute.applicant.show',$applicant->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> View Detail</a>
                                {{-- <a href="{{route('admin.candidate.active',$candidate->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Active Candidate</a> --}}
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