@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Теги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-1">
                        <a href="{{route('admin.tag.create')}}" class="btn btn-block btn-primary mb-3">Добавить</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список тегов</h3>
                                <div class="card-tools">

                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Частота использования</th>
                                        <th colspan="3" class="text-center mr-3">Действия</th>
                                    </tr>
                                    </thead>
                                    @foreach($tags as $tag)
                                        <tbody>
                                            <td>{{$tag->id}}</td>
                                            <td>{{$tag->name}}</td>
                                            <td>{{$tag->frequency}}</td>
                                            <td><a href="{{route('admin.tag.show', $tag->id)}}">Посмотреть</a></td>
                                            <td><a href="{{route('admin.tag.edit', $tag->id)}}">Изменить</a></td>
                                            <td>
                                                <form action="{{route('admin.tag.delete', $tag->id)}}" method="post">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
