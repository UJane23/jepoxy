@extends('admin.main')

@section('page_content')

    <div class="col-lg-6">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{)}}">

            {{csrf_field()}}
            <input type="hidden" name="id" value="{{ $item->id ?: 0 }}">

            <div class="form-group">
                <label>Название</label>
                <input class="form-control" placeholder="Название" name="name" value="{{ old('name', $item->name)}}">
            </div>
            <div>
                <label>Цена</label>
                <input class="form-control" placeholder="Цена" name="price" value="{{ old('price', $item->price)}}">
            </div>
            <br>
            <div>
                <label>Грамм</label>
                <input class="form-control" placeholder="Грамм" name="gram" value="{{ old('gram', $item->gram)}}">
            </div>
            <br>
            <div>
                <label>Ккал в 100 г</label>
                <input class="form-control" placeholder="Ккал в 100 г" name="kcal" value="{{ old('kcal', $item->kcal) }}">
            </div>
            <br>
            <input type="submit" class="btn-default btn" style="margin-left: 50%" value="Сохранить">
            <a type="button" class="btn-warning btn " href="{{route("")}}">Назад</a>
        </form>
    </div>

@endsection
