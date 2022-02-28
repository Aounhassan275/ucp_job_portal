@extends('candidate.layout.index')

@section('title')
    View Withdraw History
@endsection

@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View All Withdraw History</h5>
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
				<th>Withdraw Amount</th>
				<th> Way</th>
				<th>Withdraw Status</th>
				<th>Withdraw Update</th>
            </tr> 
        </thead>
        <tbody>
			@foreach (Auth::user()->c_withdraws as $c_withdraw)
			<tr>
				<td class="title">{{$c_withdraw->amount}}</td>
				<td class="centered">{{$c_withdraw->way}}</td>
				<td class="centered">
                    @if($c_withdraw->status=="Completed")
                    <span class="badge badge-success">{{$c_withdraw->status}}</span>
                    @elseif($c_withdraw->status=="onHold")
                    <span class="badge badge-primary">{{$c_withdraw->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$c_withdraw->status}}</span>
                    @endif
				</td>
				<td>{{Carbon\Carbon::parse($c_withdraw->created_at)->format('d/m/Y')}}</td>
            </tr>
            @endforeach	
        </tbody>
    </table>
</div>

@endsection