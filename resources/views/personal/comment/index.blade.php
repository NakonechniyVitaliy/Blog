@extends('layouts.main')

@section('content')
    <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Main</a></li>
            <li class="breadcrumb-item"><a href="{{ route('personal.profile.index', auth()->user()->id) }}">Profile</a></li>
            <li class="breadcrumb-item active">Comments</li>
        </ol>
    </div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid mt-5">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 text-center">Commented Posts</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content mt-5" style="margin-left: 15vw;" >
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Posts</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th >Title</th>
                                        <th>Time</th>
                                        <th colspan="2" class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($commented_posts as $commented_post)
                                        <tr>
                                            <td>{{ $commented_post->id }}</td>
                                            <td>{{ $commented_post->message }}</td>
                                            <td>{{ $commented_post->created_at }}</td>
                                            <td>
                                                <form action="{{ route('personal.comment.delete', $commented_post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
