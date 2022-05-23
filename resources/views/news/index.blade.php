@forelse($categoryList as $data)
    <a href="/news/category{{$data['id']}}">
        <h2>{{$data['title']}}</h2>
    </a>
@empty
    <p>Нет статей</p>
@endforelse
