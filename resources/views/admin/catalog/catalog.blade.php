@extends('admin.main')

@section('page_content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Каталог продукции</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a type="button" href="" class="btn btn-outline-success">+ Создать</a>
            </div>
        </div>
    </div>

    <form action="{{ route('catalog_list') }}" method="get">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="search" placeholder="Поиск по названию">
            </div>
            <div class="form-group col-md-6">
                <input type="submit" class="btn btn-outline-primary" value="Искать">
                @if ($search != '')
                    <a type="button" href="{{ route('catalog_list') }}" class="btn btn-outline-primary">Очистить поиск</a>
                @endif
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr class="table-warning">
                <th scope="col"></th>
                <th scope="col">
                    <a href="{{ route('catalog_list', ['order' => 'id', 'type' => (isset($_GET['type']) && $_GET['type'] == 'asc') ? 'desc' : 'asc' ]) }}">id</a>
                </th>
                <th scope="col" style="width: 80px; text-align: center;">Артикул</th>
                <th scope="col" style="width: 200px; text-align: center;">Фото</th>
                <th scope="col" style="width: 200px; text-align: center;">Название</th>
                <th scope="col" style="width: 250px; text-align: center;">Описание изделия</th>
                <th scope="col" style="width: 80px; text-align: center;">Наличие</th>
                <th scope="col" style="text-align: center;">Категория</th>
                <th scope="col" style="text-align: center;">Вид изделия</th>
                <th scope="col" style="text-align: center;">Опубликовано</th>
                <th scope="col"></th>
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
                    <td>{{ $item->id }}</td>
                    <td scope="row" style="max-width: 80px; overflow: hidden; text-align: center;">{{ $item->article }}</td>
                    <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->image_url }}</td>
                    <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->name }}</td>
                    <td style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->description }}</td>
                    <td style="max-width: 80px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center;">{{ $item->availability }}</td>
                    <td>
                        <div class="dropright">
                            <button class="btn btn-outline-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Категории
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Украшения ЭС</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Аксессуары для волос</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="dropright">
                            <button class="btn btn-outline-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Виды изделий
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Кулоны</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Заколки</a>
                                <a class="dropdown-item" href="#">Маленькие игрушки</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">Да</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                            <label class="form-check-label" for="exampleRadios2">Нет</label>
                        </div>
                    </td>
                    <td>
                        <a type="button" href="" class="btn btn-outline btn-success btn-sm">Редактировать</a>
                    </td>
                    <td>
                        <a type="button" onclick="return confirm('Вы уверены?!')" href="" class="btn btn-outline btn-danger btn-sm">Удалить</a>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
        {{ $items->appends(Request::only(['search', 'order', 'type']))->links() }}
    </div>
@endsection
