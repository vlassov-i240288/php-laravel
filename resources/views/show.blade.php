@extends('layouts.main')
    <body>
        @section('main')
            <div class="container">
                <h1>Сайт с новостями</h1>
            </div>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col" style="width: 900px">
                            <div class="card shadow-sm">
                                <img src="{{$newsItem['image']}}" alt="">
                                <div class="card-body">
                                    <h2 class="card-text">{{$newsItem['title']}}</h2>
                                    <p>{{$newsItem['description']}}</p>
                                    <p>автор: {{$newsItem['author']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>

