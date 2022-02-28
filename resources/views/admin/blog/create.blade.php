@extends('admin.layout.index')

@section('title')
    Add Blog
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Blog</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Enter Blog Title</label>
                            <input type="text" name="title" placeholder="Enter Blog Title" class="form-control" required>
                            <input type="hidden" name="admin_id" value="{{Auth::user()->id}}" placeholder="Enter Blog Title" class="form-control" required>
                        </div>   
                        <div class="form-group col-md-6">
                            <label>Enter Blog Image</label>
                            <input type="file" name="image"  class="form-control" required>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Select Blog Category</label>
                            <select name="bcategory_id" class="form-control" id="" required>
                                <option value="">Select</option>
                                @foreach (App\Models\Bcategory::all() as $bcategory)
                                <option value="{{$bcategory->id}}">{{$bcategory->name}}</option>
                                @endforeach
                            </select>
                        </div>   
                    </div>  
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Enter Blog Description</label>
                            <textarea name="description" id="" class="form-control summernote" cols="30" rows="10" required></textarea>                        
                        </div>   
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tags</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" name="tag[]" placeholder="Enter Tags">
                          <span class="messages"></span>
                        </div>
                        
                      </div>
                      <div class="option"></div>
                      <div class="form-group row">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-10">
                      <button class="btn btn-success add_fields">Add More Fields</button>
  
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
 
{{--  <div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="updateForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input class="form-control" type="text" id="title" name="title"  required>
                    </div>
                    <div class="form-group">
                        <label for="title">Blog Image</label>
                        <input class="form-control" type="file" id="image" name="image" >
                    </div>
                    <div class="form-group">
                        <label for="title">Blog Caetgory</label>
                        <select name="bcategory_id" class="form-control" >
                            <option value="">Select</option>
                            @foreach (App\Models\Bcategory::all() as $bcategory)
                            <option value="{{$bcategory->id}}">{{$bcategory->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Blog Tags</label>
                        <input class="form-control" type="text" id="tag" name="tag" >
                    </div>
                    <div class="form-group">
                        <label for="title">Blog Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>  --}}
@endsection
@section('scripts')
<script>
    //Add Input Fields
    $(document).ready(function() {
       
        var wrapper    = $(".option"); //Input fields wrapper
        var add_button = $(".add_fields"); //Add button class or ID
        var x = 1; //Initial input field is set to 1
     
     //When user click on add input button
     $(add_button).click(function(e){
            e.preventDefault();
   
              
            $(wrapper).append('<div id="remov" class="form-group row"><label class="col-sm-2 col-form-label">Tags</label><div class="col-sm-10"><input type="text" class="form-control" id="email" name="tag[]" placeholder="Enter Tags"><button class="btn btn-danger remove_field">Remove</button></div></div>');
                
                
                 
        });
     
        //when user click on remove button
        $(wrapper).on("click",".remove_field", function(e){ 
            e.preventDefault();
            //alert('dcdcdcdc');
            $('#remov').remove(); //remove inout field
          
        })
    });
    
</script>
@endsection