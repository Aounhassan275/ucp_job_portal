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
                    @if($profile->profile == "Approved")
                    <span class="badge badge-success">Approved</span>
                    @else
                    <span class="badge badge-danger">{{$profile->profile}}</span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('candidate.profile.edit',$profile->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> View Detail</a>
                            </div>
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