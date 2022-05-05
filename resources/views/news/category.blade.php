@foreach ($newsList as $data)
<div>
    <h2>{{$data['title']}}</h2>
    <p>{{$data['description']}}</p>
    <p>Это новость из категории: {{$data['idCategory']}}</p>
    <a href="/news/category{{$data['idCategory']}}/news{{$data['id']}}">Подробнее</a>
</div>
<hr>
@endforeach
