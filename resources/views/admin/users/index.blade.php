@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary mb-3">Добавить</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список пользователей</h3>
                                <div class="card-tools">

                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Имя</th>
                                        <th>Электронная почта</th>
                                        <th>Роль</th>
                                        <th colspan="3" class="text-center mr-3">Действия</th>
                                    </tr>
                                    </thead>
                                    @foreach($users as $user)
                                        <tbody>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role == 0 ? 'Администратор' : 'Читатель'}}</td>
                                            <td><a href="{{route('admin.user.show', $user->id)}}">Посмотреть</a></td>
                                            <td><a href="{{route('admin.user.edit', $user->id)}}">Изменить</a></td>
                                            <td>
                                                <form action="{{route('admin.user.delete', $user->id)}}" method="post">
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
