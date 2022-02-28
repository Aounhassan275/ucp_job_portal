@extends('admin.layout.index')

@section('title')
    Add Employee 
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add Employee</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.admin.store')}}" method="POST"  enctype="multipart/form-data"> 
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Your Name: </label>
                            <input type="text" name="name" placeholder="Enter Employee Name" class="form-control" required>
                            <input class="form-control" type="hidden" name="type" value="2" required/>

                        </div>   
                        <div class="form-group col-md-6">
                            <label>Your Email Address:</label>
                            <input type="email" name="email" placeholder="Enter Employee Email"  class="form-control" required>
                        </div>  
                        <div class="form-group col-md-12">
                            <label>Your Password:</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" >
                        </div>  
                    </div>
                    <button type="submit" class="btn btn-primary">Create 
                        <i class="icon-plus22 ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Employee Name</th>
                <th>Employee Email</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Admin::employee() as $key => $admin)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" name="{{$admin->name}}" email="{{$admin->email}}"
                            id="{{$admin->id}}" class="edit-btn btn btn-primary">Edit</button>
                    </td>
                <td>
                    <form action="{{route('admin.admin.destroy',$admin->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="updateForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Employee Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Employee Name</label>
                        <input class="form-control" type="text" id="name" name="name"  required>
                    </div>
                    <div class="form-group">
                        <label for="title">Employee Email</label>
                        <input class="form-control" type="email" id="email" name="email"  required>
                    </div>
                    <div class="form-group">
                        <label for="title">Employee Password</label>
                        <input class="form-control" type="password" id="password" name="password" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('.edit-btn').click(function(){
            let password = this.password;
            let id = $(this).attr('id');
            let name = $(this).attr('name');
            let email = $(this).attr('email');
            $('#name').val(name);
            $('#email').val(email);
            $('#password').val(password);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.admin.update','')}}' +'/'+id);
        });
    });
</script>
@endsection