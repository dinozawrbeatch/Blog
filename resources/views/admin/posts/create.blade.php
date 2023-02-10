@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление поста</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('admin.post.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Введите заголовок поста">
                            @error('title')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="mb-2">
                                <label for="content" class="form-label">Контент</label>
                                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                                @error('content')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Теги</label>
                            <select class="select2" name="tag_ids[]" multiple="multiple"
                                    data-placeholder="Выберите теги"
                                    style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option
                                        {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }}
                                        value="{{$tag->id}}">{{$tag->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status" class="form-label d-flex">Выберите статус поста</label>
                            <select class="form-select col-12" name="status" aria-label="Default select example">
                                <option value="1">В черновик</option>
                                <option value="2">Опубликовать</option>
                                <option value="3">В архив</option>
                            </select>
                        </div>
                        <input type="hidden" value="{{ auth()->user()->id }}" name="author_id">
                        <input type="submit" class="btn btn-primary btn-block" value="Опубликовать">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
