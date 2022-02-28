@extends('admin.layout.index')

@section('title')
    Admin 
    Dashboard
@endsection

@section('content')

<div class="row">
    
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.category.index')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{App\Models\Category::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Categorey</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-folder-plus icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.candidate.index')}}">
            <div class="card card-body bg-orange-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{App\Models\Candidate::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Candidate</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-user icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.institute.show')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{App\Models\Institute::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Institute</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-office icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.messages.index')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-bubbles4 icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                    <h3 class="mb-0">{{App\Models\Message::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Messages </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.hire.index')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{App\Models\Hire::onHold()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">New Hire Requests</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-user icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.hire.completed')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                    <h3 class="mb-0">{{App\Models\Hire::completed()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Completed Hire Requests</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-package icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
 
@endsection