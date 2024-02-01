@extends('layouts.main')

@section('content')
    <form action="{{ route('personal.profile.update', auth()->user()->id) }}" method="post"  enctype="multipart/form-data" >
        @csrf
        @method('PATCH')
    <section style="background-color: white;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('storage/' . auth()->user()->user_image) }}" alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 10vw!important;height: 20vh!important;">
                            <h5 class="my-3">{{ auth()->user()->name }}</h5>
                            <p class="text-muted mb-1">Registered since</p>
                            <p class="text-muted mb-4">{{ auth()->user()->created_at }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('personal.profile.edit', auth()->user()->id) }}">
                                    <button  type="button" class="btn btn-primary">Edit</button>
                                </a>
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
                                    <p class="text-muted mb-0">{{ auth()->user()->full_name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ auth()->user()->mobile }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ auth()->user()->address}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email verified</p>
                                </div>
                                <div class="col-sm-9">
                                    @if(auth()->user()->email_verified_at == '')
                                        <p class="text-muted mb-0" style="color:red !important;">Not verified</p>
                                    @else
                                        <p class="text-muted mb-0" style="color:limegreen !important">Verified</p>
                                    @endif
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
