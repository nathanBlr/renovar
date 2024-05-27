@extends('rotas.base')

@section('pagina')
    <h1>Create Post</h1>
    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content" value="{{ $post->content }}"required></textarea>
        </div>
        <div>
            <label for="image">foto</label>
            <input type="file" id="image" name="image">
        </div>
        <button type="submit">Edit</button>
        <button><a href="{{ route('rotas.index', 'noticias') }}">Cancel</a></button>
    </form>
@endsection
