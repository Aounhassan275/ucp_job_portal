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
                <form action="{{route('admin.blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Enter Blog Title</label>
                            <input type="text" name="title" placeholder="Enter Blog Title" class="form-control" value="{{$blog->title}}" required>
                            <input type="hidden" name="id" placeholder="Enter Blog Title" class="form-control" value="{{$blog->id}}" required>
                        </div>   
                        <div class="form-group col-md-6">
                            <label>Enter Blog Image</label>
                            <input type="file" name="image"  class="form-control">
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Select Blog Category</label>
                            <select name="bcategory_id" class="form-control" id="" required>
                                <optionvalue="{{$blog->bcategory->id}}">{{$blog->bcategory->name}}</option>
                                @foreach (App\Models\Bcategory::all() as $bcategory)
                                <option value="{{$bcategory->id}}">{{$bcategory->name}}</option>
                                @endforeach
                            </select>
                        </div>   
                    </div>  
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Enter Blog Description</label>
                            <textarea name="description" id="" class="form-control" cols="30" rows="10" required>{{$blog->description}}</textarea>                        
                        </div>   
                    </div>
                    @foreach ($blog->tags as $tag)
                        
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tags</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" name="tag[]" value="{{$tag->tag}}" placeholder="Enter Tags">
                          <input type="hidden" class="form-control" id="email" name="id[]" value="{{$tag->id}}" placeholder="Enter Tags">
                        </div>
                        
                      </div>
                      @endforeach

                    <button type="submit" class="btn btn-primary">Update 
                        <i class="icon-plus22 ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
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