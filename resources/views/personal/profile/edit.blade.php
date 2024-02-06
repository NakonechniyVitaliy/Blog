@extends('layouts.main')

@section('content')
    <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Main</a></li>
            <li class="breadcrumb-item"><a href="{{ route('personal.profile.index', auth()->user()->id) }}">Profile</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </div>
    <section style="background-color: white;margin-top:5vw;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('storage/' . auth()->user()->user_image) }}" style="width: 10vw!important;height: 10vw!important;object-fit:cover;" alt="avatar"
                                 class="rounded-circle img-fluid" >
                            <form action="{{ route('personal.profile.update_image', auth()->user()->id) }}" method="post"  enctype="multipart/form-data" >
                                @csrf
                                @method('PATCH')
                            <div class="custom-file mt-3">
                                <input name="user_image" type="file" value="{{ auth()->user()->user_image }}" class="custom-file-input" id="user_image">
                                <label class="custom-file-label" for="user_image">Choose new file</label>
                            </div>
                                <p class="text-muted mb-1 mt-3">Full Stack Developer</p>
                                <p class="text-muted mb-4">Bay Area, San Francisco, CA
                                <div class="d-flex justify-content-center mb-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ route('personal.profile.update', auth()->user()->id) }}" method="post"  enctype="multipart/form-data" >
                                @csrf
                                @method('PATCH')
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 mt-3">Username</p>
                                </div>
                                <div class="col-sm-9">
                                    <input name="name" type="text" value="{{ auth()->user()->name }}" class="form-control mt-3" id="name" placeholder="Enter new username">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            @error('full_name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 mt-2">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <input name="full_name" type="text" value="{{ auth()->user()->full_name }}" class="form-control" id="full_name" placeholder="Enter your Full name">
                                </div>
                            </div>
                            @error('full_name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">example@example.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 mt-1">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <input name="mobile" type="text" value="{{ auth()->user()->mobile }}" class="form-control" id="mobile" placeholder="Enter your Mobile">
                                </div>
                            </div>
                            @error('mobile')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 mt-1">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <input name="address" type="text" value="{{ auth()->user()->address }}" class="form-control" id="address" placeholder="Enter your Mobile">
                                </div>
                            </div>
                            @error('address')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                                <div class="d-flex justify-content-center mb-2 mt-3">
                                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    </form>
@endsection
