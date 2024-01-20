@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Post Edit</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Main</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active">{{ $post->title }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row ml-1">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Editing</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Post Name</label>
                                    <input type="text" class="form-control" value="{{ $post->title }}" name="title"
                                           placeholder="Name">
                                </div>
                                @error('title')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                            @error('content')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <div class="form-group ml-3">
                                <label for="exampleInputFile">Preview image input</label>
                                <div class="w-50 mt-1 mb-1 ml-5">
                                    <img src="{{ asset('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            @error('preview_image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <div class="form-group ml-3">
                                <label for="exampleInputFile">Main image input</label>
                                <div class="w-50 mt-1 mb-1 ml-5">
                                    <img src="{{ asset('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            @error('main_image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $post->category_id ? 'selected' : ''}}
                                        >{{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('$category_id')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <div class="form-group">
                                <label>Chose Tags</label>
                                <select name="tag_ids[]" class="select2" multiple="multiple"
                                        data-placeholder="Select Tags"
                                        style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option
                                            {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('$tag_ids')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
