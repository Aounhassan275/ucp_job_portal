@extends('institute.layout.index')

@section('title') 
    View Candidates Hire Request
@endsection
@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View All Candidate</h5>
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
                <th class="text-center">Candidate Email Address</th>
                <th class="text-center">Job Title</th>
                <th class="text-center">Candidate Whatsapp</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
                <th class="text-center">Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (Auth::user()->hires as $hire)

            <tr>
                <td class="text-center">{{$hire->profile->email}}</td>
                <td class="text-center">{{$hire->job->title}}</td>
                <td class="text-center"><a href="https://api.whatsapp.com/send?phone={{$hire->profile->number}}"><img src="{{asset('whatsapp.png')}}" height="20" width="20" alt=""></a></td>
                <td class="text-center">
                    @if($hire->status=="Completed")
                    <span class="badge badge-success">Hired</span>
                    @else
                    <span class="badge badge-danger">{{$hire->status}}</span>
                    @endif
                </td>
                <td>
                    <form action="{{route('institute.hire.destroy',$hire->id)}}" method="POST">
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
                                <a href="{{route('institute.hire.show',$hire->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> View Detail</a>
                                @if($hire->completedStatus())
                                <a href="{{route('institute.hire.completed',$hire->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Hire Candidate</a>
                               @endif
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