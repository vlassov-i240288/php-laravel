@extends('layouts.main')
    <body>
        @section('main')
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <form action="{{route('addNews')}}" method="POST">
                            @csrf
                            <h2>Добавить новость</h2>
                            <div class="form-floating mb-3">
                                <input name="title" type="text" class="form-control" id="floatingInput" placeholder="Заголовок новости">
                                <label for="floatingInput">Заголовок</label>
                            </div>
                            <div class="form-floating">
                                <textarea name="content" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
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

