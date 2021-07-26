@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>{{ $post->title }}</h1>
        <small>{{ $post->slug }}</small>
        <div class="mt-3">
            <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
            <a class="btn btn-secondary ml-2" href="{{ route('admin.posts.index') }}">Elenco post</a>
        </div>
        <div class="mt-4">{{ $post->content }}</div>
    </div>
@endsection
