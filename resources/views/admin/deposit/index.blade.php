@extends('admin.layout.index')

@section('title')
    View Candidate Deposit
@endsection

@section('content')
<div class="card">
    <div class="table-responsive">
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Candidate Name</th>
                    <th>Candidate Email Address</th>
                    <th>Candidate Status</th>
                    <th>Candidate Deposit Amount</th>
                    <th>Candidate Category 1</th>
                    <th>Candidate Category 2</th>
                    <th>Candidate Trancation ID</th>
                    <th>Candidate Payment Way</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr> 
            </thead>
            <tbody>
                @foreach (App\Models\Deposit::all() as $key => $deposit)

                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$deposit->candidate->name}}</td>
                    <td>{{$deposit->candidate->email}}</td>
                    <td>
                        @if($deposit->status=="Active")
                        <span class="badge badge-success">{{$deposit->status}}</span>
                        @else
                        <span class="badge badge-danger">{{$deposit->status}}</span>
                        @endif
                    </td>
                    <td>{{$deposit->price}}</td>
                    <td>{{$deposit->category1}}</td>
                    <td>{{$deposit->category2}}</td> 
                    <td>{{$deposit->t_id}}</td>
                    <td>{{$deposit->payment}}</td>
                    @if($deposit->member)
                    <td>{{$deposit->member->name}}</td>
                    @else
                    <td>Self</td>
                    @endif
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('admin.candidate.actives',$deposit->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Active Candidate</a>
                                    <a href="{{route('admin.deposit.detail',$deposit->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Detail</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection