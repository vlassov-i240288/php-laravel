@extends('layouts.main')
    <body>
        @section('main')
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <form action="{{route('formA')}}" method="POST">
                            @csrf
                            <h2>Форма обратной связи</h2>
                            <div class="form-floating mb-3">
                                <input name="e-mail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                                <textarea name="comments" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Комментарии...</label>
                            </div>
                            <input type="submit" class="btn btn-secondary">
                        </form>
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>

