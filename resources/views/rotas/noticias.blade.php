@extends('rotas.base')

@section('title', 'Notícias')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center font-fredericka">Notícias</h1>
    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Listagem de notícias dummy -->
        @for ($i = 1; $i <= 9; $i++)
        <div class="bg-gray-100 p-4 rounded-lg shadow-md relative">
            <img src="{{ asset('Fotos/noticia'.$i.'.jpg') }}" alt="Imagem da notícia" class="w-full h-48 object-cover rounded-md transition-transform duration-300 transform hover:scale-[1.1]">
            <div class="absolute top-2 right-2 bg-[#68c8e3] text-white text-xs px-2 py-1 rounded">
                {{ now()->subDays($i)->format('Y-m-d') }}
            </div>
            <h2 class="text-xl font-semibold mt-4">Notícia {{ $i }}</h2>
            <p class="text-gray-700 mt-2">Breve descrição da notícia {{ $i }}.</p>
            <a href="#" class="mt-4 inline-block bg-[#68c8e3] text-white px-4 py-2 rounded hover:bg-blue-600">
                Ver mais
            </a>
        </div>
        @endfor
    </div>
    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10"/>
    <div class="flex justify-center mt-6 hidden sm:flex">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex space-x-4 text-base h-10">
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    
</div>
@endsection
