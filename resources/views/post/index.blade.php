@extends('layouts.main')

@section('content')
    <h1>Все посты</h1>


    <a href="{{ route('post.create') }}">Создать пост</a>
    <div class="row g-5 mt-5">
        @foreach ($posts as $post)
            <div class=" col" style="width: 18rem;">
                <img src="https://via.placeholder.com/100" class="card-img-top" alt="https://via.placeholder.com/100">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
