@extends('admin.layout.index')

@section('title')
    Add Payment Way
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Payment Way</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.payment.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Enter Payment Way Name</label>
                            <select name="name" class="form-control">
                                <option value="">Select</option>
                                <option value="Bank Account">Bank Account</option>
                                <option value="EasyPiasa">EasyPiasa</option>
                                <option value="Jazzcash">Jazzcash</option>
                            </select>   
                        </div>   
                        <div class="form-group col-md-6">
                            <label>Enter Account Holder Name</label>
                            <input type="text" name="a_name" placeholder="Enter Account Holder Name" class="form-control" required>
                        </div>  
                        <div class="form-group col-md-6">
                            <label>Enter Account Number</label>
                            <input type="number" name="a_number" placeholder="Enter Account Number" class="form-control" required>
                        </div> 
                        <div class="form-group col-md-6">
                            <label>Enter Bank Name</label>
                            <input type="text" name="b_name" placeholder="Enter Bank Account Name" class="form-control">
                        </div>      
                        <div class="form-group col-md-6">
                            <label>Enter Receiver Name</label>
                            <input type="number" name="b_number" placeholder="Enter Receiver Number" class="form-control" >  
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
                <th>Payment Way Name</th>
                <th>Account Holder Name</th>
                <th>Account Number</th>
                <th>Bank Name</th>
                <th>Bank Number</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Payment::all() as $key => $payment)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$payment->name}}</td>
                <td>{{$payment->a_name}}</td>
                <td>{{$payment->a_number}}</td>
                <td>{{$payment->b_name}}</td>
                <td>{{$payment->b_number}}</td>
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" name="{{$payment->name}}" a_name="{{$payment->a_name}}" a_number="{{$payment->a_number}}" b_name="{{$payment->b_name}}" b_number="{{$payment->b_number}}"
                        id="{{$payment->id}}" class="edit-btn btn btn-primary">Edit</button>
                </td>
                
                <td>
                    <form action="{{route('admin.payment.destroy',$payment->id)}}" method="POST">
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
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Payment Way</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Enter Payment Way Name</label>
                        <select name="name" id="name" class="form-control">
                            <option value="">Select</option>
                            <option value="Bank Account">Bank Account</option>
                            <option value="EasyPiasa">EasyPiasa</option>
                            <option value="Jazzcash">Jazzcash</option>
                        </select>
                    </div>   
                    <div class="form-group ">
                        <label>Enter Account Holder Name</label>
                        <input type="text" name="a_name" id="a_name" placeholder="Enter Account Holder Name" class="form-control" required>
                    </div>  
                    <div class="form-group">
                        <label>Enter Account Number</label>
                        <input type="number" name="a_number" id="a_number" placeholder="Enter Account Number" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label>Enter Bank Name</label>
                        <input type="text" name="b_name" id="b_name" placeholder="Enter Bank Account Name" class="form-control" >                    
                    </div>      
                    <div class="form-group">
                        <label>Enter Receiver Name</label>
                        <input type="number" name="b_number" id="b_number" placeholder="Enter Receiver Number" class="form-control" > 
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
            let id = $(this).attr('id');
            let name = $(this).attr('name');
            let a_name = $(this).attr('a_name');
            let b_name = $(this).attr('b_name');
            let a_number = $(this).attr('a_number');
            let b_number = $(this).attr('b_number');
            $('#name').val(name);
            $('#a_name').val(a_name);
            $('#b_name').val(b_name);
            $('#a_number').val(a_number);
            $('#b_number').val(b_number);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.payment.update','')}}' +'/'+id);
        });
    });
</script>
@endsection