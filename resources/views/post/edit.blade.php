@extends('layouts.main')

@section('content')
    <h1>Редактировать пост - "{{ $post->title }}"</h1>

    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class=" mt-5">
        <div class="bd-example">
            <form method="POST" action="{{ route('post.update', $post->id) }}">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок</label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <label for="description">Описание</label>
                        <textarea id="description" name="description"
                            class="form-control">{{ $post->description }}</textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <label for="text" class="block">Описание</label>
                        <textarea id="text" name="text" class="form-control">{{ $post->text }}</textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
