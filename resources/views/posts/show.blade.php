@extends('layouts.main')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $date->translatedFormat('F') }}
                 {{$date->day}} • {{ $date->format('H:i:s') }} • Featured • {{$post->comments->count()}} комментариев</p>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </section>
            <section class="comment-list mb-4">
                @foreach($post->comments as $comment)
                    @if($comment->status == 2)
                <div class="card-comment">
                    <div class="comment-text mb-3">
                    <span class="username">
                        <div>
                            {{ $comment->author }}
                        </div>
                        <span class="text-muted float-right">{{ $comment->dateAsCarbon->diffForHumans() }}</span>
                    </span>
                        {{ $comment->content }}
                    </div>
                </div>
                    @endif
                @endforeach
            </section>
            <section class="comment-section">
                <h2 class="section-title mb-5" data-aos="fade-up">Отправить комментарий</h2>
                <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12" data-aos="fade-up">
                            <label for="content" class="sr-only">Комментарий</label>
                            <textarea name="content" id="content" class="form-control" placeholder="Ваш комментарий"
                                      rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" data-aos="fade-up">
                            <input type="submit" value="Отправить" class="btn btn-warning">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection
