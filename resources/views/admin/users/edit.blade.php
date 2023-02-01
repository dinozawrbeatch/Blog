@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование профиля</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{route('admin.user.update', $user->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <div class="mb-2">
                                <label for="name" class="form-label">Имя пользователя</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Электронная почта</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Роль</label>
                                <select class="form-control" name="role_id">
                                    @foreach($roles as $id => $role)
                                        <option value="{{$id}}"
                                            {{$id == $user->role ? ' selected' : ''}}>
                                            {{$role}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Обновить">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
