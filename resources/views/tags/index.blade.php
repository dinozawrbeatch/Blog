@extends('layouts.main')
@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Теги</h1>
        <section class="posts-section">
            <ul class="list-group">
            @foreach($tags as $tag)
                    <li class="list-group-item"><a href="{{ route('tag.post.index', $tag->id) }}">{{ $tag->name }}</a></li>
            @endforeach
            </ul>
        </section>
        <div class="mx-auto d-flex justify-content-center">{{ $tags->links() }}</div>
    </div>
</main>
@endsection
