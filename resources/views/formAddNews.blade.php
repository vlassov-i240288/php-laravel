@extends('layouts.main')
    <body>
        @section('main')
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <form action="{{route('add')}}" method="POST">
                            @csrf
                            <h2>Добавить новость</h2>
                            <div class="form-floating mb-3">
                                <select name="category_id" id="floatingInput1">
                                    @foreach($categories as $item)
                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingInput1">Категория</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="title" type="text" class="form-control" id="floatingInput" placeholder="Заголовок новости">
                                <label for="floatingInput">Заголовок</label>
                            </div>
                            <div class="form-floating">
                                <textarea name="inform" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Текст новости</label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-secondary">
                                Добавить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>

