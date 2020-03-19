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
                        <div class="card-title">List of Post</div>
                        <div class="card-tools" >
                            {{-- <button type="button" data-toggle = 'modal' id="add_curriculum" data-target = '#modal_add_curriculum' class="btn btn-primary btn-sm"> Add Curriculum <i class="fas fa-plus-circle"></i></button> --}}
                            <a href="/admin/post/create" class="btn btn-primary btn-sm"> Add Post <i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered pd-0 text-center" >
                            <thead >
                                <tr>
                                    <th>Title</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($posts) > 0)
                                   @foreach ($posts as $post)
                                       <tr>
                                            <td>
                                               {{ $post->title }}
                                            </td>
                                            <td>
                                                <a href='/admin/post/{{$post->id}}/edit' class='btn btn-success btn-sm' id="{{ $post->id }}"  title="Update Post"> <i class="fas fa-pen"></i> </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('post.destroy',$post->id) }}" method='POST'>
                                                    @csrf
                                                    <input type="hidden" name="_method" value='DELETE'>
                                                    <button title="Delete Post" type='submit' class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
                                {{ $posts->links() }}
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
            document.getElementById('nav_post').classList.add('active');
        });
    </script>
@endsection