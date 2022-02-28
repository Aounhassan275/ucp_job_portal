@extends('candidate.layout.index')

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
                            <input type="text" class="form-control" name="" value="{{url('candidate/register',Auth::user()->code)}}" readonly>                       
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
                @foreach (Auth::user()->refers as  $key => $candidate)
				<td>{{$key + 1}}</td>
				<td class="title">{{$candidate->name}}</td>
				<td class="centered">{{$candidate->email}}</td>
				<td class="centered">
                    @if($candidate->status=="active")
                    <span class="badge badge-success">{{$candidate->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$candidate->status}}</span>
                    @endif
				</td>
				<td>{{$candidate->balance}}</td>
            @endforeach	
            </tbody>
        </table>
    </div>
</div>
@endsection