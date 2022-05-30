@extends('layouts.main')
    <body>
        @section('main')

            <div class="container">
                <h1>Сайт с новостями</h1>
            </div>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($news as $item)
                            <div class="col" style="width: 700px">
                                <div class="card shadow-sm">
                                    <img src="{{$item->image}}" alt="" style="height: 300px">
                                    <div class="card-body">
                                        <h2 class="card-text">{{$item->title}}</h2>
                                        <p>{{$item->inform}}</p>
                                        <p>Это новость из категории: {{$item->category_id}}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="/news/category{{$item->id}}/news{{$item->category_id}}"><button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>

