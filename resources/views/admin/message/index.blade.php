@extends('admin.layout.index')

@section('title')
    Messages
@endsection

@section('content')
<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Condition</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Message::all() as $key => $message)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->subject}}</td>
                <td>{{$message->message}}</td>
                <td>
                    @if($message->status=="Read")
                    <span class="badge badge-success">{{$message->status}}</span>
                    @else
                    <span class="badge badge-danger">{{$message->status}}</span>
                    @endif
                </td>
                {{--  <td class="text-center">
                    <form action="{{route('admin.message.destroy',$message->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>  --}}
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <a href="{{route('admin.message.active',$message->id)}}" class="dropdown-item"><i class="icon-file-excel"></i>Read</a>
                                <a href="{{route('admin.message.destroy',$message->id)}}" class="dropdown-item"><i class="icon-file-excel"></i>Delete</a>
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
