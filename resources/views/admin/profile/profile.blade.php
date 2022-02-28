@extends('admin.layout.index')

@section('title')
    View All CV
@endsection

@section('content')
<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Candidate Name</th>
                <th>Candidate Email Address</th>
                <th>Created By</th>

                <th>CV Status</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (App\Models\Profile::all() as $key => $profile)

            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$profile->candidate->name}}</td>
                <td>{{$profile->candidate->email}}</td>
                @if($profile->member)
                <td>{{$profile->member->name}}</td>
                @else
                <td>Self</td>
                @endif
                <td>
                    @if($profile->profile == "Approved")
                    <span class="badge badge-success">{{$profile->profile}}</span>
                    @elseif($profile->profile =="Rejected")
                    <span class="badge badge-danger">{{$profile->profile}}</span>
                    @else
                    <span class="badge badge-primary">{{$profile->profile}}</span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('admin.profile.show',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> View Detail</a>
                                <a href="{{route('admin.profile.approved',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Approved CV</a> 
                                <a href="{{route('admin.profile.rejected',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Reject CV</a>
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