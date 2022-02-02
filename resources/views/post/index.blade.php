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
                    <div class="d-flex justify-between">
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Подробнее</a>
                        @if ($post->trashed())
                            <a href="{{ route('post.restore', $post->id) }}" class="btn btn-danger">Восстановить</a>
                        @endif
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
