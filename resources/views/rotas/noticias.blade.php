@extends('rotas.base')

@section('title', 'Notícias')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center font-fredericka">Notícias</h1>
    <hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>
    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Listagem de notícias dummy -->
        @foreach ($noticias as $noticia)
            <div class="bg-gray-100 p-4 rounded-lg shadow-md relative">
                <img src="{{ asset('storage/' . $noticia->image_path) }}" alt="Imagem da notícia" class="w-full h-48 object-cover rounded-md transition-transform duration-300 transform hover:scale-[1.1]">
                <div class="absolute top-2 right-2 bg-[#68c8e3] text-white text-xs px-2 py-1 rounded">
                    {{ now()->subDays($noticia->created)->format('d-m-Y') }}
                </div>
                <h2 class="text-xl font-semibold mt-4"> {{ $noticia->title }}</h2>
                <p class="text-gray-700 mt-2">{{ $noticia->short_text }}.</p>
                <a href="{{ route('noticias.show',$noticia->slug) }}" class="loading-link mt-4 inline-block bg-[#68c8e3] text-white px-4 py-2 rounded hover:bg-blue-600">
                    Ver mais
                </a>
            </div>
        @endforeach
    </div>
    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100"/>
    <div class="flex justify-center mt-6 hidden sm:flex"> 
        
        <nav aria-label="Page navigation example">
            <ul class="inline-flex space-x-4 text-base h-10">
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    
</div>
@endsection
