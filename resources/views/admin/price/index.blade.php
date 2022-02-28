@extends('admin.layout.index')

@section('title')
    Add Price 
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Price</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.price.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Select Deposit Page </label>
                            <select name="page" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Institute">Institute</option>
                                <option value="Service Provider">Service Provider</option>
                                <option value="Member Profit">Member Profit</option>
                            </select>   
                        </div>   
                        <div class="form-group col-md-6">
                            <label>Enter Price</label>
                            <input type="number" name="price" placeholder="Enter Price" class="form-control" required>
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
                <th>Deposit Page</th>
                <th>Price</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Price::all() as $key => $price)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$price->page}}</td>
                <td>{{$price->price}}</td>
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" page="{{$price->page}}" price="{{$price->price}}"
                        id="{{$price->id}}" class="edit-btn btn btn-primary">Edit</button>
                </td>
                
                <td>
                    <form action="{{route('admin.price.destroy',$price->id)}}" method="POST">
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
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Price</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Enter Payment Way Name</label>
                        <select name="page" id="page" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Institute">Institute</option>
                            <option value="Service Provider">Service Provider</option>
                            <option value="Member Profit">Member Profit</option>
                        </select> 
                    </div>   
                    <div class="form-group ">
                        <label>Enter Price</label>
                        <input type="number" name="price" id="price" placeholder="Enter Price" class="form-control" required>
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
            let page = $(this).attr('page');
            let price = $(this).attr('price');
            $('#page').val(page);
            $('#price').val(price);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.price.update','')}}' +'/'+id);
        });
    });
</script>
@endsection