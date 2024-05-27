@extends('rotas.base')

@section('pagina')
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Ttulo" >
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3" placeholder="Conteudo" ></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection
