@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title aos-init aos-animate" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"> {{ $date->format('F') }} {{ $date->day }}, {{ $date->year }}, {{ $date->format('H:i') }} • {{ $post->comments->count() }} Comments</p>
            <section class="blog-post-featured-img aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <h4 class="d-inline-block mr-2">Tags: </h4>
                    @foreach($tags as $tag)
                        <p class="d-inline-block" style="background: lawngreen;line-height:160%; border-radius: 10%;  padding: 3px 5px;">{{ $tag->title }} </p>
                    @endforeach
                </div>
                <img src="{{ asset('storage/' . $post->preview_image) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto aos-init aos-animate " data-aos="fade-up">
                       {!! $post->content !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        @auth()
                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                            @csrf
                                @if(auth()->user()->likedPost->contains($post->id))
                                    <div>
                                        <span class="d-inline-block" style="font-size: 30pt">{{ $post->most_liked_post_count }}</span>
                                        <button type="submit" class="border-0 bg-transparent d-inline-block" >
                                            <i class="fa fa-heart" style="font-size: 30pt !important;color:palevioletred" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                @else
                                    <div>
                                        <span class="d-inline-block" style="font-size: 30pt">{{ $post->most_liked_post_count }}</span>
                                        <button type="submit" class="border-0 bg-transparent d-inline-block">
                                            <i class="fa fa-heart-o" aria-hidden="true" style="font-size: 30pt !important;color:palevioletred"></i>
                                        </button>
                                    </div>
                                @endif
                        </form>
                        @endauth
                        @guest()
                            <div>
                                <span class="d-inline-block" style="font-size: 30pt">{{ $post->most_liked_post_count }}</span>
                                <i class="fa fa-heart-o" aria-hidden="true" style="font-size: 30pt !important;color:palevioletred"></i>
                            </div>
                        @endguest
                        <blockquote data-aos="fade-up" class="aos-init aos-animate mt-5">
                            <p>You are safe here! I shouted above the sudden noise. She looked away from me downhill. The people were coming out of their houses, astonished.</p>
                            <footer class="blockquote-footer">Oluchi Mazi</footer>
                        </blockquote>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4 aos-init aos-animate" data-aos="fade-up">Related Posts</h2>
                        <div class="row">
                            @foreach($related_posts as $related_post)
                                <div class="col-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                                    <img src="{{ asset('storage/' . $related_post->preview_image) }}" alt="related post" class="post-thumbnail">
                                    <p class="post-category">{{ $related_post->category->title }}</p>
                                    <h5 class="post-title">{{ $related_post->title }}</h5>
                                </div>
                            @endforeach
                    </section>
                    <div class="mb-3">
                        <h4>Comments ({{$post->comments->count()}})</h4>
                    </div>
                    @foreach($post->comments as $comment)
                        <div class="card-comment mt-2 border-bottom ">
                            <div class="comment-text">
                                <span class="username">
                                    <div>
                                         <b>{{ $comment->user->name }}</b>
                                    </div>
                                        <span class="text-muted float-right">{{ $comment->created_at->diffForHumans() }}</span>
                                </span><!-- /.username -->
                                {{ $comment->message }}
                            </div>
                            <!-- /.comment-text -->
                        </div>
                    @endforeach
                    @auth()
                        <section class="comment-section">
                            <h2 class="section-title mb-3 mt-5 aos-init aos-animate" data-aos="fade-up">Leave a Reply</h2>
                            <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12 aos-init aos-animate" data-aos="fade-up">
                                        <label for="message" class="sr-only">Comment</label>
                                        <textarea name="message" id="message" class="form-control" placeholder="Comment" rows="10">Comment</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 aos-init aos-animate" data-aos="fade-up">
                                        <input type="submit" value="Send Message" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection()
