@extends('institute.layout.index')
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
				<th>Payment Way</th>
				<th>Withdraw Status</th>
				<th>Withdraw Update</th>
            </tr> 
        </thead>
        <tbody>
			@foreach (Auth::user()->i_withdraws as $i_withdraw)
			<tr>
				<td class="title">{{$i_withdraw->amount}}</td>
				<td class="centered">{{$i_withdraw->way}}</td>
				<td class="centered">
                    @if($i_withdraw->status=="Completed")
                    <span class="badge badge-success">{{$i_withdraw->status}}</span>
                    @elseif($i_withdraw->status=="onHold")
                    <span class="badge badge-primary">{{$i_withdraw->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$i_withdraw->status}}</span>
                    @endif
				</td>
				<td>{{Carbon\Carbon::parse($i_withdraw->created_at)->format('d/m/Y')}}</td>
            </tr>
            @endforeach	
        </tbody>
    </table>
</div>

@endsection