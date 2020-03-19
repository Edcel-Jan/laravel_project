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
    <div class="row mt--2">
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
                                    <th>Email</th>
                                    <th>Fullname</th>
                                    <th>Role</th>
                                    <th>Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id='tbody_curriculum'>
                                
                            </tbody>
                        </table>
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