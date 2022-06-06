@extends('layouts.app')

@section('content')
<div class="container">
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}
{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<div style="
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: space-between;
">
    @forelse($categories as $data)
        {{--            <div>--}}
        {{--                <img src="{{$data['image']}}" alt="">--}}
        {{--                <div class="card-body">--}}
        {{--                    <h2 class="card-text">{{$data['title']}}</h2>--}}
        {{--                    <div class="d-flex justify-content-between align-items-center">--}}
        {{--                        <div class="btn-group">--}}
        {{--                            <a href="/news/category{{$data['id']}}">--}}
        {{--                                <button type="button" class="btn btn-sm btn-outline-secondary">Выбрать</button>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        <div class="card" style="width: 18rem;">
            <img src="{{ $data->image }}" class="card-img-top" alt="...">
            <div class="card-body" style="padding: 1rem 1rem;
                                            display: flex;
                                            flex-direction: column;
                                            height: 100%;
                                            justify-content: space-between;">
                <h5 class="card-title">{{ $data->title }}</h5>
                <p class="card-text">{{ $data->description }}</p>
                <a href="/news/category{{$data['id']}}" class="btn btn-primary">Выбрать</a>
            </div>
        </div>
    @empty
        <p>Нет статей</p>
    @endforelse
</div>






</div>
@endsection
