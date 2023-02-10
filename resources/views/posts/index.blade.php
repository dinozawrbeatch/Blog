@extends('layouts.main')
@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
        @foreach($posts as $post)
        <section class="posts-section">
            <div class="row">
                <div class="fetured-post blog-post" data-aos="fade-right">
                    <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                    </a>
                </div>
            </div>
        </section>
        @endforeach
        <div class="mx-auto ">
            {{ $posts->links() }}
        </div>
    </div>
</main>
@endsection
