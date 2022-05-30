@extends('layouts.main')
    <body>
        @section('main')
            <div class="container">
                <h1>Сайт с новостями</h1>
            </div>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @forelse($categories as $data)
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="{{$data->image}}" alt="" style="height: 300px">
                                        <div class="card-body">
                                            <h2 class="card-text">{{$data->title}}</h2>
                                            <h5>Категория {{$data->id}}</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="/news/category{{$data->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">Выбрать</button></a>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>Нет статей</p>
                        @endforelse
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>

