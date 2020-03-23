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
                        <div class="card-title">List of Users</div>
                        <div class="card-tools" >
                            {{-- <button type="button" data-toggle = 'modal' id="add_curriculum" data-target = '#modal_add_curriculum' class="btn btn-primary btn-sm"> Add Curriculum <i class="fas fa-plus-circle"></i></button> --}}
                            <a href="/admin/user/create" class="btn btn-primary btn-sm"> Add User <i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered pd-0 text-center"  id="table_curriculum">
                            <thead >
                                <tr>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Fullname</th>

                                    <th>Role</th>
                                    <th>Active</th>
                                    <th>Date Added</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody id='tbody_curriculum'>
                                @if (count($users) > 0)
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <img height="40" width="40" src="{{ $user->photo ? asset($user->photo->path) : 'no file' }}" alt="">  
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->role->name }}
                                            </td>
                                            <td style="{{ $user->is_active == 1 ? 'color:green' : 'color:red' }}">
                                                {{ $user->is_active == 1 ? 'Active' : 'Not Active' }}
                                            </td>
                                            <td>
                                                {{ $user->created_at->diffForHumans() }}
                                            </td>
                                            <td>
                                                <a href = '{{ route('user.edit',$user->id) }}' class="btn btn-sm btn-success" >Update</a>
                                             
                                               

                                            </td>
                                            <td>
                                                
                                                <form id="form-user-delete" action=" {{ route('user.destroy', $user->id) }} " method="POST" >
                                                    @csrf
                                                    <input type="hidden" name="_method" value='DELETE'>
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                   
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="float-right">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
    <script>    
        $(document).ready(function(){
            document.getElementById('nav_user').classList.add('active');
        });
    </script>
@endsection