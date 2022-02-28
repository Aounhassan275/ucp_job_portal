@extends('candidate.layout.index')

@section('title') 
    View Service Provider Hire Request
@endsection
@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View Service Provider Hire Request</h5>
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
                <th class="text-center">Service Provider Email</th>
                <th class="text-center">Job Title</th>
                <th class="text-center">Service Provider Whatsapp</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (Auth::user()->shires as $shire)

            <tr>
                <td class="text-center">{{$shire->service->email}}</td>
                @if($shire->job)
                <td class="text-center">{{$shire->job->title}}</td>
                @else 
                <td></td>
                @endif
                <td class="text-center"><a href="https://api.whatsapp.com/send?phone={{$shire->service->phone}}"><img src="{{asset('whatsapp.png')}}" height="20" width="20" alt=""></a></td>
                <td class="text-center">
                    @if($shire->status=="Completed")
                    <span class="badge badge-success">Hired</span>
                    @else
                    <span class="badge badge-danger">{{$shire->status}}</span>
                    @endif
                </td>

                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('institute.shire.show',$shire->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> View Detail</a>
                                {{-- <a href="{{route('admin.candidate.active',$candidate->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Active Candidate</a> --}}
                                {{-- <a href="{{route('candidate.candidate.delete',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Delete</a>
                                <a href="{{route('admin.candidate.block',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Block</a>
                                <a href="{{route('admin.candidate.active',$candidate->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Active</a>
                            </div> --}}
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection