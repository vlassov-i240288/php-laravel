@extends('layouts.main')
<body>
@section('main')
    <div class="container">
        <h1>Админ панель</h1>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Текст</th>
                        <th scope="col">Управление</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @if(session()->has('success'))--}}
{{--                        <x-alert typy="success" :message="session()->get('success')"></x-alert>--}}
{{--                    @endif--}}
                    @foreach($news as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->title}}</td>
                            <td>{{$item->inform}}</td>
                            <td>
                                <a href="{{route('delNews', $item->id)}}">Удалить </a>
                                <a href="/addNews"> Добавить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
