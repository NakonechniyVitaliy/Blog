@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
        <section class="featured-posts-section">
            Category
        </section>
        @foreach($categories as $category)
            <a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a>
        @endforeach
    </div>
</main>
@endsection()
