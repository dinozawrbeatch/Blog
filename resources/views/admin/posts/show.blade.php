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
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title d-flex mr-4">{{$post->title}}</h3>
                                <a href="{{route('admin.post.edit', $post->id)}}">Изменить</a>
                                <form class="ml-5" action="{{route('admin.post.delete', $post->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="text-danger border-0 bg-transparent" type="submit">
                                        Удалить
                                    </button>
                                </form>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$post->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Заголовок</td>
                                        <td>{{$post->title}}</td>
                                    </tr>

                                    <tr>
                                        <td>Контент</td>
                                        <td>{{$post->content}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
