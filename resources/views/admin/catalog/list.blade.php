@extends('admin.main')

@section('page_content')

    <div class="container-fluid table">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Каталог изделий</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a type="button" href="/admin/catalog/new" class="btn btn-outline-success">+ Создать</a>
                </div>
            </div>
        </div>

        <form action="{{ route('catalog_list') }}" method="get">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="search" placeholder="Поиск по названию">
                </div>
                <div class="form-group col-md-6">
                    <input type="submit" class="btn btn-outline-secondary" value="Искать">
                    @if ($search != '')
                        <a type="button" href="{{ route('catalog_list') }}" class="btn btn-outline-secondary">Очистить поиск</a>
                    @endif
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr class="table-warning">
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">
                        <a href="{{ route('catalog_list', ['product' => 'id', 'order_type' => (isset($_GET['type']) && $_GET['type'] == 'asc') ? 'desc' : 'asc' ]) }}">id</a>
                    </th>
                    <th scope="col" style="width: 80px; text-align: center;">Артикул</th>
                    <th scope="col" style="width: 200px; text-align: center;">Фото</th>
                    <th scope="col" style="width: 200px; text-align: center;">Название</th>
                    <th scope="col" style="width: 200px; text-align: center;">Цена/ руб</th>
                    <th scope="col" style="width: 250px; text-align: center;">Описание изделия</th>
                    <th scope="col" style="width: 250px; text-align: center;">Краткое описание</th>
                    <th scope="col" style="width: 80px; text-align: center;">Наличие</th>
                    <th scope="col" style="text-align: center;">Категория</th>
                    <th scope="col" style="text-align: center;">Тип изделия</th>
                    <th scope="col" style="text-align: center;">Опубликовано</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($items as $item)
                    <?php /**  @var $item \App\Models\Product */ ?>
                    <tr>
                        <td>
                            <a type="button" href="" class="btn btn-outline-primary btn-sm">Просмотр</a>
                        </td>
                        <td>
                            <a type="button" href="{{route('edit_product', ['id' => $item->id])}}" class="btn btn-outline btn-success btn-sm">Редактировать</a>
                        </td>
                        <td>{{ $item->id }}</td>
                        <td scope="row" style="max-width: 80px; overflow: hidden; text-align: center;">{{ $item->article }}</td>
                        <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><img src="{{ \Storage::url($item->image_url)  }}" style="max-width: 100px; max-height: 50px" alt=""></td>
                        <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->name }}</td>
                        <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->price }}</td>
                        <td style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->description }}</td>
                        <td style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->preview_text }}</td>
                        <td style="max-width: 80px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center;">{{ $item->availability }}</td>
                        <td style="text-align: center;">
                            @foreach($categories as $category)
                                {{$category->id == $item->category_id ? "$category->name" : ''}}
                            @endforeach
                        </td>
                        <td style="text-align: center;">
                            @foreach($types as $type)
                                {{$type->id == $item->type_id ? "$type->name" : ''}}
                            @endforeach
                        </td>
                        <td style="text-align: center;">
                            {{ $item->published ? 'Да' : 'Нет' }}
                        </td>
                        <td>
                            <a type="button" href="{{route('delete_product', ['id' => $item->id])}}" class="btn btn-outline btn-danger btn-sm" onclick="return confirm('Вы уверены?!')">Удалить</a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
            {{ $items->appends(Request::only(['search', 'product', 'type']))->links() }}
        </div>
    </div>

@endsection
