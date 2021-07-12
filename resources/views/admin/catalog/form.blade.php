@extends('admin.main')

@section('page_content')
    <div class="container-fluid table">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            @if($item->name)
                <h1 class="h2">{{$item->name}}</h1>
            @else
                <h1 class="h2">Новое изделие</h1>
            @endif
        </div>
        <div class="col">

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{route('save_product', isset($item->id) ? $item->id : 0)}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $item->id }}">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Артикул</label>
                    <div class="col-sm-7">
                        <input class="form-control" placeholder="Артикул" name="article" maxlength="5" value="{{ old('article', $item->article) }}">
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <div>
                        @if ($item->image_url)
                            <img src="{{ \Storage::url($item->image_url)  }}" style="max-width: 100px; max-height: 50px" alt="">
                        @endif
                    </div>
                    <label class="col-sm-2 col-form-label">Фото</label>
                    <div class="col-sm-7">
                        <input type="file" class="form-control-file" placeholder="Фото" name="image_url" value="{{ old('image_url', $item->image_url) }}">
                    </div>

                </div>
                <br>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Название</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('name') is-invalid @enderror" placeholder="Название" name="name" maxlength="30" value="{{ old('name', $item->name) }}">
{{--                        @error('name')--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Заполните название--}}
{{--                        </div>--}}
{{--                        @enderror--}}
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Описание изделия</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" placeholder="Описание изделия" name="description" rows="3" maxlength="510">{{ old('description', $item->description) }}</textarea>
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Краткое описание</label>
                    <div class="col-sm-7">
                        <input class="form-control" placeholder="Краткое описание" name="preview_text" maxlength="190" value="{{ old('preview_text', $item->preview_text) }}">
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Цена</label>
                    <div class="col-sm-7">
                        <input class="form-control" placeholder="Цена" name="price" maxlength="" value="{{ old('price', $item->price) }}">
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Наличие</label>
                    <div class="col-sm-7">
                        <input class="form-control" placeholder="Наличие" name="availability" maxlength="" value="{{ old('availability', $item->availability) }}">
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Категория</label>
                    <div class="col-sm-7">
                        <select id="inputState" class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value={{$category->id}} {{$category->id == $item->category_id ? 'selected' : ''}}>
                                    <a class="dropdown-item" href="{{$category->name === null ? ‘’ : $category->name}}">{{$category->name}}</a>
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Тип изделия</label>
                    <div class="col-sm-7">
                        <select id="inputState" class="form-control" name="type_id">
                            @foreach($types as $type)
                                <option value={{$type->id}} {{$type->id == $item->type_id ? 'selected' : ''}}>
                                    <a class="dropdown-item" href="{{$type->name === null ? ‘’ : $type->name}}">{{$type->name}}</a>
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Опубликовать</label>
                    <div class="col-sm-7">
                        <input type="checkbox" name="published" value="1" {{ old('published', $item->published) ? "checked" : '' }}>
                    </div>
                </div>
                <br>

                <div class="col-sm-7">
                    <input type="submit" class="btn-default btn" style="margin-left: 50%" value="Сохранить">
                    <a type="button" class="btn-warning btn " href="{{route("catalog_list")}}">Назад</a>
                </div>

            </form>
        </div>
    </div>
@endsection
