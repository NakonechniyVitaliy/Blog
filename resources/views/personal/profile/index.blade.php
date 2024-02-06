@extends('layouts.main')

@section('content')
    <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Main</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </div>
    <form action="{{ route('personal.profile.update', auth()->user()->id) }}" method="post"  enctype="multipart/form-data" >
        @csrf
        @method('PATCH')
    <section style="background-color: white;margin-top:5vw;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('storage/' . $user->user_image) }}" alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 10vw!important;height: 10vw!important;object-fit:cover;">
                            <h5 class="my-3">{{ $user->name }}</h5>
                            <p class="text-muted mb-1">Registered since</p>
                            <p class="text-muted mb-4">{{ $user->created_at }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                @if(auth()->user()->id == $user->id)
                                    <a href="{{ route('personal.profile.edit', $user->id) }}">
                                        <button  type="button" class="btn btn-primary">Edit</button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->full_name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->mobile }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->address}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email verified</p>
                                </div>
                                <div class="col-sm-9">
                                    @if($user->email_verified_at == '')
                                        <p class="text-muted mb-0" style="color:red !important;">Not verified</p>
                                    @else
                                        <p class="text-muted mb-0" style="color:limegreen !important">Verified</p>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4 border ml-5" style="text-align: center">
                                    <a style="text-decoration: none" href="{{ route('personal.like.index') }}">
                                        <i class="fa fa-heart" style="color:palevioletred;padding: 10px;display: inline-block" aria-hidden="true"></i>
                                        <h6 style="display: inline-block">Liked posts</h6>
                                    </a>
                                </div>
                                <div class="col-sm-4 border ml-5" style="text-align: center">
                                    <a style="text-decoration: none" href="{{ route('personal.comment.index') }}">
                                        <i class="fa fa-comment" style="color:deepskyblue;padding: 10px;display: inline-block" aria-hidden="true"></i>
                                        <h6 style="display: inline-block">Commented posts</h6>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
@endsection
