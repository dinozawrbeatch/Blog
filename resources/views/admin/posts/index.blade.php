@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <a href="{{route('admin.post.create')}}" class="btn btn-block btn-primary mb-3">Добавить</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список постов</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Заголовок</th>
                                        <th>Контент</th>
                                        <th>Автор</th>
                                        <th colspan="3" class="text-center mr-3">Действия</th>
                                    </tr>
                                    </thead>
                                    @foreach($posts as $post)
                                        <tbody>
                                        <a href="{{route('admin.post.show', $post->id)}}">
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($post->content, '15') }}</td>
                                            <td>{{ \App\Models\User::find($post->author_id)->name }}</td>
                                            <td><a href="{{route('admin.post.show', $post->id)}}">Посмотреть</a></td>
                                            <td><a href="{{route('admin.post.edit', $post->id)}}">Изменить</a></td>
                                            <td>
                                                <form action="{{route('admin.post.delete', $post->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="text-danger border-0 bg-transparent" type="submit">
                                                        Удалить
                                                    </button>
                                                </form>
                                            </td>
                                        </a>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
