@extends('rotas.base')
@section('title', 'Galeria')
@section('pagina')

<div class="min-h-screen flex flex-col container mx-auto py-8">
    <div id="controls-carousel" class="relative  w-full h-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-screen md:h-112 lg:h-128 overflow-hidden rounded-lg ">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <figure class="w-full h-full">
                    <img src="{{ asset('Centro de Dia.webp') }}" class="absolute block w-full h-full object-cover" alt="Centro de Dia">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Centro de Dia</figcaption>
                </figure>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <figure class="w-full h-full">
                    <img src="{{ asset('creche.webp') }}" class="absolute block w-full h-full object-cover" alt="Creche">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Creche</figcaption>
                </figure>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <figure class="w-full h-full">
                    <img src="{{ asset('projetos.webp') }}" class="absolute block w-full h-full object-cover" alt="Projetos">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Projetos</figcaption>
                </figure>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <figure class="w-full h-full">
                    <img src="{{ asset('Centro de Convivio.webp') }}" class="absolute block w-full h-full object-cover" alt="Centro de Convivio">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Centro de Convivio</figcaption>
                </figure>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <figure class="w-full h-full">
                    <img src="{{ asset('Polo II.webp') }}" class="absolute block w-full h-full object-cover" alt="Polo II">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Polo II</figcaption>
                </figure>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
@endsection
