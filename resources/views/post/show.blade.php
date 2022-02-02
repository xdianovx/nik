@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->text }}</p>
    <a href="{{ route('post.edit', $post->id) }}">Редактировать</a>
    <form method="POST" action="{{ route('post.destroy', $post->id) }}">
        @csrf
        @method('delete')
        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" value="Удалить пост">
        </div>
    </form>

@endsection
