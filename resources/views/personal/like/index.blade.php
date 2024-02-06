@extends('layouts.main')

@section('content')
    <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Main</a></li>
            <li class="breadcrumb-item"><a href="{{ route('personal.profile.index', auth()->user()->id) }}">Profile</a></li>
            <li class="breadcrumb-item active">Likes</li>
        </ol>
    </div>
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($liked_posts as $liked_post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ asset('storage/' . $liked_post->preview_image) }}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{$liked_post->category->title}}</p>
                                <p style="color:#7d848b">{{ $liked_post->created_at }}</p>
                                @auth()
                                    <form action="{{ route('post.like.store', $liked_post->id) }}" method="post">
                                        @csrf
                                        <span class="d-inline-block mr-1">{{ $liked_post->comments_count }}</span>
                                        <i class="fa fa-comment-o mr-3" aria-hidden="true" style="font-size: 16pt !important;"></i>

                                        <span class="d-inline-block">{{ $liked_post->most_liked_post_count }}</span>
                                        @if(auth()->user()->likedPost->contains($liked_post->id))
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fa fa-heart d-inline-block" aria-hidden="true" style="font-size: 16pt !important;color:palevioletred"></i>
                                            </button>
                                        @else
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fa fa-heart-o" aria-hidden="true" style="font-size: 16pt !important;color:palevioletred"></i>
                                            </button>
                                        @endif
                                    </form>
                                @endauth
                                @guest()
                                    <div>
                                        <span class="d-inline-block">{{ $liked_post->most_liked_post_count }}</span>
                                        <i class="fa fa-heart-o" aria-hidden="true" style="font-size: 16pt !important;color:palevioletred"></i>
                                    </div>
                                @endguest
                            </div>
                            <a href="{{ route('post.show', $liked_post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $liked_post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection
