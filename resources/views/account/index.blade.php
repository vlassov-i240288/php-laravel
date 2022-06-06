@extends('layouts.app')
@section('content')
    <div class="offset-4">
        <h2>Добро пожаловать {{ Auth::user()->name }}</h2>
        @if(Auth::user()->is_admin)
            <a href="{{ route('admin.index') }}">в админку</a>
        @endif

        @if(Auth::user()->is_admin == 0)
            <button type="button" class="btn btn-outline-danger">Хочу быть админом</button>
{{--            <a href="{{ route('admin.index') }}">в админку</a>--}}

{{--            <form action="{{ route('addAdmin') }}">--}}
{{--                <input type='button' value="Хочу быть админом">--}}
{{--            </form>--}}

        @endif
    </div>
@endsection
