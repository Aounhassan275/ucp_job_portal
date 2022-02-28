@extends('admin.layout.index')

@section('title')
    View Blog
@endsection

@section('content')


<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Blog Image</th>
                <th>Blog Title</th>
                <th>Blog Category</th>
                <th>Blog Created By</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Blog::all() as $key => $blog)
            <tr>
                <td>{{$key+1}}</td>
            <td><img src="{{asset($blog->image)}}" height="200" width="200" alt=""></td>
                <td>{{$blog->title}}</td>
                @if($blog->bcategory)
                <td>{{$blog->bcategory->name}}</td>
                @endif
                <td>{{$blog->admin->name}}</td>

                <td>
                    <a href="{{route('admin.blog.edit',$blog->id)}}"><button  class="btn btn-primary">Edit</button>
                    </a></td>
                <td>
                    <form action="{{route('admin.blog.destroy',$blog->id)}}" method="POST">
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
 
@endsection