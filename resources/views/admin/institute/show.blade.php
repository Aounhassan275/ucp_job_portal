@extends('admin.layout.index')

@section('title')
    Institute 
@endsection

@section('content')
<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Created By</th>

                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Institute::all() as $key => $institute)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$institute->name}}</td>
                <td>{{$institute->email}}</td>
                @if($institute->member)
                <td>{{$institute->member->name}}</td>
                @else
                <td>Self</td>
                @endif
                <td>
                    @if($institute->status=="active")
                    <span class="badge badge-success">{{$institute->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$institute->status}}</span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <a href="{{route('admin.institute.detail',$institute->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> View Detail</a>
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
