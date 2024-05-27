@extends('rotas.base')
@section('title', 'Notícias')
@section('pagina')
<div class="min-h-screen flex flex-col container mx-auto max-w-4xl py-8">
<h1 class="mx-auto text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent mx-auto bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Notícias</span></h1>
<button class="border rounded-lg border-white bg-white hover:bg-lime-900 hover:border-lime-900"><a href="{{ route('posts.create') }}" ">Nova Notícia</a></button> 
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mx-auto">
    @foreach($posts as $post)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="w-full h-auto rounded-t-lg" src="{{ asset($post->image) }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#" class="pointer-events-none cursor-default ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->content }}</p>
                <a href="{{ route('posts.edit', $post->id) }}" class="inline-block px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Edit
                </a>
                <a href="{{ route('posts.destroy', $post->id) }}" class="inline-block ml-2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Delete
                </a>
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection
