@extends('institute.layout.index')
@section('title')
    Referral
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"> Referrals</h5>
            </div>
            <div class="card-body">
                <form >
                   <div class="row">
                       
                        <div class="form-group col-12">
                            <label class="form-label">Copy Link</label>
                            <input type="text" class="form-control" name="" value="{{url('institute/register',Auth::user()->code)}}" readonly>                       
                        </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-12 ">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">View Referral</h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Status</th>
                    <th>User Earning</th>
                </tr>
            </thead>
            <tbody>
				@foreach (Auth::user()->refers as  $key => $institute)
				<tr>
					<td>{{$key + 1}}</td>
					<td class="title">{{$institute->name}}</td>
					<td class="centered">{{$institute->email}}</td>
					<td class="centered">
						@if($institute->status=="active")
						<span class="badge badge-success">{{$institute->status}}</span>
						@else
						<span class="badge badge-danger">{{$institute->status}}</span>
						@endif
					</td>
					<td>{{$institute->balance}}</td>
				</tr>
				@endforeach	
            </tbody>
        </table>
    </div>
</div>

@endsection