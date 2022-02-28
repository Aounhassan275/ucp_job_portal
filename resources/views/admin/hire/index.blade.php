@extends('admin.layout.index')

@section('title')
    View Candidate Hire Request
@endsection

@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View All Candidate Hire Request</h5>
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
                <th class="text-center">Candidate Profile Email Address</th>
                <th class="text-center">Job Title</th>
                <th class="text-center">Institute Name</th>
                <th class="text-center">Institute Whatsapp</th>
                <th class="text-center">Candidate Whatsapp</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (App\Models\Hire::onHold() as $key => $hire)

            <tr>
                <td>{{$key + 1}}</td>
                <td class="text-center">{{$hire->profile->email}}</td>
                <td class="text-center">{{$hire->job->title}}</td>
                <td class="text-center">{{$hire->institute->name}}</td>
                <td class="text-center">
                    <a href="https://api.whatsapp.com/send?phone={{$hire->institute->number}}">
                        <img src="{{asset('whatsapp.png')}}" height="20" width="20" alt="">
                    </a>
                </td>
                <td class="text-center">
                    <a href="https://api.whatsapp.com/send?phone={{$hire->profile->number}}">
                        <img src="{{asset('whatsapp.png')}}" height="20" width="20" alt="">
                    </a>
                </td>
                <td class="text-center">
                    @if($hire->status=="Completed")
                    <span class="badge badge-success">{{$hire->status}}</span>
                    @elseif($hire->status=="onHold")
                    <span class="badge badge-primary">{{$hire->status}}</span>  
                    @else
                    <span class="badge badge-danger">{{$hire->status}}</span>
                    @endif
                </td>

                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('admin.hire.detail',$hire->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> View Detail</a>
                                <a href="{{route('admin.hire.complete',$hire->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> On Hold</a>
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