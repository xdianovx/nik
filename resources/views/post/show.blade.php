@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->text }}</p>

@endsection
