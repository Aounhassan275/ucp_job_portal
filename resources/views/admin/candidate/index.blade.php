@extends('admin.layout.index')

@section('title')
    View All Candidate
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
                <th>Candidate Status</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (App\Models\Candidate::all() as $key => $candidate)

            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$candidate->name}}</td>
                <td>{{$candidate->email}}</td>
                @if($candidate->member)
                <td>{{$candidate->member->name}}</td>
                @else
                <td>Self</td>
                @endif
                <td>
                    @if($candidate->status=="active")
                    <span class="badge badge-success">{{$candidate->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$candidate->status}}</span>
                    @endif
                </td>

                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('admin.profile.index',$candidate->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> View Detail</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection