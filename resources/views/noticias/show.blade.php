@extends('rotas.base')

@section('title', $noticia->title)

@section('content')
<div class="flex justify-center p-8">

    <div class="w-full max-w-4xl rounded-lg bg-[#E5E7EB] text-surface shadow-secondary-1">
      
      <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center font-fredericka pb-2">{{ $noticia->title }}</h1>
      
      <div class="p-6">
        <p class="text-base font-verdana text-center text-[48px] mt-5 leading-tight">
            {{ $noticia->short_text }}
        </p>        
        <div class="relative overflow-hidden bg-cover bg-no-repeat">
          <img class="mx-auto my-4 rounded-lg shadow-md" src="{{ asset('storage/' . $noticia->image_path) }}" alt="Nature Image">
        </div>
        <div class="history-text font-[verdana]">
            <h3 class="pt-2 pb-2 font-fredericka text-6x1 text-center"> Texto </h3>
            <div class="text-center pt-4">
                {!! nl2br(e($noticia->text)) !!}
            </div>
        </div>
        <a href="{{ route('rotas.index','noticias') }}" class="loading-link mt-4 inline-block bg-[#68c8e3] text-white px-4 py-2 rounded hover:bg-blue-600">
            Retornar
        </a>
      </div>
    </div>
  </div>
@endsection