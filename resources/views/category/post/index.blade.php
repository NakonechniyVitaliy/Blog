@extends('layouts.main')

@section('content')
    <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Posts</a></li>
            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Categories</a></li>
            <li class="breadcrumb-item active">{{ $category->title }}</li>
        </ol>
    </div>
<main class="blog">
    <div class="container">
        <h3 class="edica-page-title" data-aos="fade-up">{{$category->title}}</h3>
        <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('storage/' . $post->preview_image) }}" alt="blog post">
                        </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{$post->category->title}}</p>
                                @auth()
                                    <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                        @csrf
                                            <span class="d-inline-block">{{ $post->most_liked_post_count }}</span>
                                            @if(auth()->user()->likedPost->contains($post->id))
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
                                        <span class="d-inline-block">{{ $post->most_liked_post_count }}</span>
                                        <i class="fa fa-heart-o" aria-hidden="true" style="font-size: 16pt !important;color:palevioletred"></i>
                                    </div>
                                @endguest
                            </div>
                        <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                    </div>
                    @endforeach
                </div>
            <div class="row">
                <div class="m-auto" style="margin-top: -80px !important;">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
    </div>

</main>

@endsection()
