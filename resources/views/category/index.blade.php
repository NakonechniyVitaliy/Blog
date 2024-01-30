@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Categories</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($categories as $category)
                    <a style="display: block !important;text-decoration: none;" class="col-md-4 fetured-post blog-post" data-aos="fade-up" href="{{ route('category.post.index', $category->id) }}">
                        <div class="blog-post-thumbnail-wrapper"
                             style="border-radius: 15px;
                             text-align:center;background-image:
                             url({{ asset('storage'). '/' . $category->category_image }})">
                            <h6 class="blog-post-title mt-5" style="font-size: 35pt;color:white;text-shadow: 5px 5px black;">{{ $category->title }}</h6>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </div>
</main>

<style>
.blog-post-thumbnail-wrapper{
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
@endsection()
