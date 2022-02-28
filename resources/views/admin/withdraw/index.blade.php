@extends('admin.layout.index')

@section('title')
    Withdraw Requests
@endsection

@section('content')
<div class="card">
    <h4>CANDIDATE WITHDRAW REQUESTS</h4>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Amount</th>
                <th>Payment Way</th>
                <th>Acc. Holder Name</th>
                <th>Acc. Number</th>
                <th>Receiver Number</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\C_withdraw::all() as $key => $c_withdraw)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$c_withdraw->candidate->name}}</td>
                <td>{{$c_withdraw->candidate->email}}</td>
                <td>{{$c_withdraw->amount}}</td>
                <td>{{$c_withdraw->way}}</td>
                <td>{{$c_withdraw->a_name}}</td>
                <td>{{$c_withdraw->a_number}}</td>
                @if($c_withdraw->way=="Bank Account")
                <td>{{$c_withdraw->r_number}}</td>
                @else 
                <td></td>
                @endif
                <td>
                    @if($c_withdraw->status=="Completed")
                    <span class="badge badge-success">{{$c_withdraw->status}}</span>
                    @elseif($c_withdraw->status=="onHold")
                    <span class="badge badge-primary">{{$c_withdraw->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$c_withdraw->status}}</span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <a href="{{route('admin.c_withdraw.completed',$c_withdraw->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Completed</a>
                                <a href="{{route('admin.c_withdraw.onhold',$c_withdraw->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> OnHold</a>
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
<div class="card">
    <h4>INSITUTE WITHDRAW REQUESTS</h4>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Amount</th>
                <th>Payment Way</th>
                <th>Acc. Holder Name</th>
                <th>Acc. Number</th>
                <th>Receiver Number</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\I_withdraw::all() as $key => $i_withdraw)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$i_withdraw->institute->name}}</td>
                <td>{{$i_withdraw->institute->email}}</td>
                <td>{{$i_withdraw->amount}}</td>
                <td>{{$i_withdraw->way}}</td>
                <td>{{$i_withdraw->a_name}}</td>
                <td>{{$i_withdraw->a_number}}</td>
                @if($i_withdraw->way=="Bank Account")
                <td>{{$i_withdraw->r_number}}</td>
                @else 
                <td></td>
                @endif
                <td>
                    @if($i_withdraw->status=="Completed")
                    <span class="badge badge-success">{{$i_withdraw->status}}</span>
                    @elseif($i_withdraw->status=="onHold")
                    <span class="badge badge-primary">{{$i_withdraw->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$i_withdraw->status}}</span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <a href="{{route('admin.i_withdraw.completed',$i_withdraw->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Completed</a>
                                <a href="{{route('admin.i_withdraw.onhold',$i_withdraw->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> OnHold</a>
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

<div class="card">
    <h4>SERVICE PROVIDER WITHDRAW REQUESTS</h4>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Amount</th>
                <th>Payment Way</th>
                <th>Acc. Holder Name</th>
                <th>Acc. Number</th>
                <th>Receiver Number</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\S_withdraw::all() as $key => $s_withdraw)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$s_withdraw->service->name}}</td>
                <td>{{$s_withdraw->service->email}}</td>
                <td>{{$s_withdraw->amount}}</td>
                <td>{{$s_withdraw->way}}</td>
                <td>{{$s_withdraw->a_name}}</td>
                <td>{{$s_withdraw->a_number}}</td>
                @if($s_withdraw->way=="Bank Account")
                <td>{{$s_withdraw->r_number}}</td>
                @else 
                <td></td>
                @endif
                <td>
                    @if($s_withdraw->status=="Completed")
                    <span class="badge badge-success">{{$s_withdraw->status}}</span>
                    @elseif($s_withdraw->status=="onHold")
                    <span class="badge badge-primary">{{$s_withdraw->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$s_withdraw->status}}</span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <a href="{{route('admin.s_withdraw.completed',$s_withdraw->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Completed</a>
                                <a href="{{route('admin.s_withdraw.onhold',$s_withdraw->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> OnHold</a>
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
<div class="card">
    <h4>MEMBER WITHDRAW REQUESTS</h4>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Amount</th>
                <th>Payment Way</th>
                <th>Acc. Holder Name</th>
                <th>Acc. Number</th>
                <th>Receiver Number</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Mwithdraw::all() as $key => $mwithdraw)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$mwithdraw->member->name}}</td>
                <td>{{$mwithdraw->member->email}}</td>
                <td>{{$mwithdraw->amount}}</td>
                <td>{{$mwithdraw->way}}</td>
                <td>{{$mwithdraw->a_name}}</td>
                <td>{{$mwithdraw->a_number}}</td>
                @if($mwithdraw->way=="Bank Account")
                <td>{{$mwithdraw->r_number}}</td>
                @else 
                <td></td>
                @endif
                <td>
                    @if($mwithdraw->status=="Completed")
                    <span class="badge badge-success">{{$mwithdraw->status}}</span>
                    @elseif($mwithdraw->status=="onHold")
                    <span class="badge badge-primary">{{$mwithdraw->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$mwithdraw->status}}</span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <a href="{{route('admin.mwithdraw.completed',$mwithdraw->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> Completed</a>
                                <a href="{{route('admin.mwithdraw.onhold',$mwithdraw->id)}}" class="dropdown-item"><i class="icon-file-excel"></i> OnHold</a>
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
