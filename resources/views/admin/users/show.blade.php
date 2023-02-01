@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Тег</h1>
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
                            <div class="card-header col-12">
                                <h3 class="card-title mr-4">{{$user->name}}</h3>
                                <form action="{{route('admin.user.delete', $user->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a class="col-12" href="{{route('admin.user.edit', $user->id)}}">Изменить</a>
                                    <button class="text-danger  border-0 bg-transparent" type="submit">
                                        Удалить
                                    </button>
                                </form>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$user->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Имя</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                        <td>Электронная почта</td>
                                        <td>{{$user->email}}</td>
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
