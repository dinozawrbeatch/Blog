@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комментарии</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Список комментариев</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Комментарий</th>
                                    <th>Автор</th>
                                    <th>Статус</th>
                                    <th colspan="3" class="text-center mr-3">Действия</th>
                                </tr>
                                </thead>
                                @foreach($comments as $comment)
                                    <tbody>
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->content }}</td>
                                    <td>{{ $comment->author }}</td>
                                    <td>{{ $comment->status == 1 ? 'Ожидает подтверждения' : 'Подтвержден'}}</td>
                                    <td>
                                        <form action="{{ route('admin.comment.update', $comment->id) }}" method="post">
                                            @csrf
                                            @method('patch')
                                            <input type="hidden" name="status" value="2">
                                            <input class="text-green border-0 bg-transparent" type="submit" value="Утвердить">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.comment.delete', $comment->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="text-danger border-0 bg-transparent" type="submit">
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                    </tbody>
                                @endforeach
                            </table>
                            <div>
                                {{$comments->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
