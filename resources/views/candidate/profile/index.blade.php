@extends('candidate.layout.index')

@section('title')
    View Profiles
@endsection

@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View All PROFILES</h5>
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
                <th>Your Name</th>
                <th>Your Professional</th>
                <th>Profile Status</th>
                <th>Deposit Status</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (Auth::user()->profiles as $key => $profile)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$profile->name}}</td>
                <td>{{$profile->professional}}</td>
                <td>
                    @if($profile->checkStatus() == "old")
                    <span class="badge badge-success">Approved</span>
                    @elseif($profile->checkStatus() == "fresh")
                    <span class="badge badge-danger">Not Approved</span>
                    @else
                    <span class="badge badge-primary">Expired</span>
                    @endif
                </td>
                <td>
                    @if($profile->deposits->count() > 0)
                    <span class="badge badge-success">Deposit Done</span>
                    @else 
                    <span class="badge badge-danger">Deposit Pending</span>
                    @endif

                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                @if($profile->checkStatus() == "expired")
                                <a href="{{route('candidate.deposit.show',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Make Deposit</a>

                                @else
                                <a href="{{route('candidate.profile.edit',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> View Detail</a>
                                @endif
                                @if($profile->deposits()->count() == 0)
                                {{-- @else --}}

                                <a href="{{route('candidate.deposit.show',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Make Deposit</a>
                                @endif
                                {{-- <a href="{{route('admin.profile.approved',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Approved Profile</a> 
                                <a href="{{route('admin.profile.rejected',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Reject Profile</a> --}}
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