@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
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
                    <form action="{{route('admin.post.update', $post->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}"
                                   placeholder="Введите заголовок поста">
                            @error('title')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="mb-2">
                                <label for="content" class="form-label">Контент</label>
                                <textarea class="form-control" id="content" name="content"
                                          rows="3">{{$post->content}}</textarea>
                                @error('content')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="tag" class="form-label col-12">Теги</label>
                            <select class="form-select w-100" name="tag" multiple aria-label="multiple select example">
                                <option>Выберите теги</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Обновить">
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
