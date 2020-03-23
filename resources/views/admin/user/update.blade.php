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
                <a href="javascript:(0)">User</a>
            </li>
                    
        </ul>
    </div>
        @include('layouts.success')
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Create User</div>
                        <div class="card-tools" >
                            {{-- <button type="button" data-toggle = 'modal' id="add_curriculum" data-target = '#modal_add_curriculum' class="btn btn-primary btn-sm"> Add Curriculum <i class="fas fa-plus-circle"></i></button> --}}
                            <a href="/admin/user" class="btn btn-primary btn-sm"> Back To User List  &nbsp;<i class="fas fa-backward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">  
                <div class="row">
                    <div class="col-lg-6 offset-3 mb-3">
                    <h4 class="card-title mb-2"> User Image</h4>
                        <img height="70" width="100" src="{{ $user->photo ? asset($user->photo->path): "No Image" }}" alt="">
                    </div>
                </div>
                <form  method="post" action = '{{ route('user.update',$user->id) }}' enctype='multipart/form-data' >
                        @csrf
                            <input type="hidden" name="_method" value='PUT'>
                            <div class="col-lg-6 offset-3">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' :'' }}">
                                    <label for="title">Enter Email</label>
                                    <input type="email"  value="{{ $user->email }}" id="email" name="email" placeholder="Enter Email" class="form-control">
                                    {!! $errors->first('email','<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                        

                        <div class="col-lg-6 offset-3">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' :'' }}">
                                <label for="name">Enter Fullname</label>
                                <input type="text"  value="{{$user->name }}" id="name" name="name" placeholder="Enter Fullname" class="form-control">
                                {!! $errors->first('name','<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>

                        <div class="col-lg-6 offset-3">
                            <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">
                                <label for="password">Enter Password</label>
                                <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control">
                                {!! $errors->first('password','<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>

                        <div class="col-lg-6 offset-3">
                            <label for="role">Choose Role</label>
                            <select name="role_id" id="role_id" value='' class="form-control">
                                <option value=""  disabled>-- Choose Role --</option>
                                <option  value="1">Administrator</option>
                                <option  value="2">Subscriber</option>
                                <option value="3">Author</option>
                                <option  value="4">User</option>
                            </select>
                        </div>
                        <div class="col-lg-6 offset-3">
                            <label for="is_active">Choose Status</label>
                            <div class="form-group">
                                <select name="is_active" id="is_active"  class="form-control">
                                    <option value="" selected disabled>-- Choose Status --</option>
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>
                                   
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 offset-3">
                            <div class="form-group">
                                <label for="user_upload">Choose File</label>
                                <input type="file" id="user_upload" name="user_upload" class="form-control">
                            </div>
                        </div>
                            {{-- <div class="col-lg-6 offset-3">
                                <div class="form-group {{ $errors->has('content') ? 'has-error' :'' }}">
                                    <label for="title">Enter Content</label>
                                    <input type="text" id="content"   value="{{ old('content') }}"   name="content" placeholder="Enter Content" class="form-control">
                                    {!! $errors->first('content','<span class="text-danger">:message</span>') !!}
                                </div>
                            </div> --}}

                            <div class="mt-2 col-lg-6 offset-3">
                                <button type="submit" class="btn btn-primary btn-sm m-3"> Update User <i class="fas fa-envelope"></i></button>
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

    <script>
         $(document).ready(function(){
            document.getElementById('nav_user').classList.add('active');
            document.getElementById('role_id').value = '{{ $user->role->id }}';
            document.getElementById('is_active').value = '{{ $user->is_active }}';
        });
       
    </script>
@endsection