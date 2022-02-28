@extends('admin.layout.index')

@section('title')
    Institute Deposit
@endsection

@section('content')
<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Institue Name</th>
                <th>Trancation ID</th>
                <th>Created By</th>

                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\I_deposit::all() as $key => $i_deposit)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$i_deposit->institute->name}}</td>
                <td>{{$i_deposit->institute->email}}</td>
                <td>{{$i_deposit->name}}</td>
                <td>{{$i_deposit->t_id}}</td>
                @if($i_deposit->member)
                <td>{{$i_deposit->member->name}}</td>
                @else
                <td>Self</td>
                @endif
                <td>
                    @if($i_deposit->institute->status=="active")
                    <span class="badge badge-success">{{$i_deposit->institute->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$i_deposit->institute->status}}</span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <a href="{{route('admin.institute.active',$i_deposit->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Active</a>
                                <a href="{{route('admin.institute.block',$i_deposit->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Block</a>
                                {{-- <a href="{{route('admin.service.delete',$s_deposit->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Delete</a> --}}
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
