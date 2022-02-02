@extends('layouts.main')

@section('content')
    <h1>Создать пост</h1>

    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            Это уведомление об успехе — check it out!
        </div>
    @endif

    <div class=" mt-5">
        <div class="bd-example">
            <form method="POST" action="{{ route('post.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <label for="description">Описание</label>
                        <textarea id="description" name="description" class="form-control"></textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <label for="text" class="block">Описание</label>
                        <textarea id="text" name="text" class="form-control"></textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
