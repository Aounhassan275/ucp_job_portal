@extends('institute.layout.index')
@section('title')
    Profile
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Update Profile</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('institute.institute.update',Auth::user()->id)}}"  method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <input type="hidden" name="id" class="form-control" value="{{Auth::user()->id}}">
                            <div class="form-group col-6">
                                <label class="form-label">User Name</label>
                                <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" >
                            </div>
                            <div class="form-group col-6">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" >
                            </div>
                       </div>
                       <div class="row">
                            <div class="form-group col-6">
                                <label class="form-label">Phone Number</label>
                                <input type="number" name="phone" maxlength="12" minlength="12" class="form-control " value="{{Auth::user()->phone}}" >
                            </div>
                            <div class="form-group col-6">
                                <label class="form-label">Password <span style="color:red;">(Leave It Blank If You dont Want to Change)</span></label>
                                <input type="password" name="password" class="form-control" >
    
                            </div>
                        </div>
                       <div class="row">
                         
                            <div class="form-group col-6">
                                <label class="form-label">Image<span style="color:red;">(Leave It Blank If You dont Want to Change)</span></label>
                                <input type="file" name="image" class="form-control" >
                            </div>
                            <div class="form-group col-6">
                                <label class="form-label">Address</label>
                                <input type="text" name="address"  class="form-control " value="{{Auth::user()->address}}" >
                            </div>
                       </div>
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