@extends('layouts.template')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Manage</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="index.php">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="javascript:(0)">Post</a>
            </li>
                    
        </ul>
    </div>
        @include('layouts.success')
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Create Post</div>
                        <div class="card-tools" >
                            {{-- <button type="button" data-toggle = 'modal' id="add_curriculum" data-target = '#modal_add_curriculum' class="btn btn-primary btn-sm"> Add Curriculum <i class="fas fa-plus-circle"></i></button> --}}
                            <a href="/admin/post" class="btn btn-primary btn-sm"> Back To Post &nbsp; <i class="fas fa-backward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">  
                
                <form  method="post" action ='{{ route('post.update',$post->id) }}' >
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 offset-3">
                            <div class="form-group {{ $errors->has('title') ? 'has-error' :'' }}">
                                    <label for="title">Enter Title</label>
                                    <input type="text"  value="{{ $post->title }}" id="title" name="title" placeholder="Enter Title" class="form-control">
                                    {!! $errors->first('title','<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 offset-3">
                                <div class="form-group {{ $errors->has('content') ? 'has-error' :'' }}">
                                    <label for="content">Enter Content</label>
                                    <input type="text" id="content"   value="{{ $post->content }}"   name="content" placeholder="Enter Content" class="form-control">
                                    {!! $errors->first('content','<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <input type="hidden" name="_method" value="PUT" >

                            <div class="mt-2 col-lg-6 offset-3">
                                <button type="submit" class="btn btn-primary btn-sm "> Save <i class="fas fa-envelope"></i></button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
    {{-- <script>
        $(document).ready(function(){
            document.getElementById('nav_user').classList.add('active');
        });
    </script> --}}
@endsection