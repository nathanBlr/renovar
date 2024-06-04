@extends('rotas.base')

@section('title', 'Projetos')

@section('content')
<h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center font-fredericka pt-6">Projetos</h1>
<hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10"/>



<div class="bg-white p-6 rounded shadow-md flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
    <!-- Left Column -->
    <div class="w-full md:w-2/3 flex flex-col items-center">
        <a class="flex flex-col items-center  bg-gray-200 border border-gray-200 h-60 md:h-80 rounded-lg shadow md:flex-row md:w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('santacasa faxada.webp') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>

        <a class="flex flex-col items-center  bg-gray-200 border border-gray-200 h-60 md:h-80 rounded-lg shadow md:flex-row md:w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('santacasa faxada.webp') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>

        <a class="flex flex-col items-center  bg-gray-200 border border-gray-200 h-60 md:h-80 rounded-lg shadow md:flex-row md:w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('santacasa faxada.webp') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
    
        <a class="flex flex-col items-center  bg-gray-200 border border-gray-200 h-60 md:h-80 rounded-lg shadow md:flex-row md:w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('santacasa faxada.webp') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
        <a class="flex flex-col items-center  bg-gray-200 border border-gray-200 h-60 md:h-80 rounded-lg shadow md:flex-row md:w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('santacasa faxada.webp') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>


    </div>

    <!-- Right Column -->
    
    <div class="bg-gray-200 w-full md:w-1/3 min-h-screen md:h-screen flex flex-col items-center justify-center rounded border shadow-md p-6">
        <div class="container mx-auto max-w-7xl">
            <div class="relative overflow-hidden bg-cover bg-no-repeat">
                <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg"  />
            </div>
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">O que são nossos projetos?</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                Nossos projetos são atividades cuidadosamente planejadas e executadas para <strong>promover a transformação social</strong> e o <strong>desenvolvimento sustentável</strong> da comunidade. Através de <strong>iniciativas inovadoras e engajadoras</strong>, buscamos <strong>impactar positivamente a vida das pessoas</strong>, <strong>fortalecendo os laços sociais</strong> e <strong>construindo um futuro melhor para todos</strong>.
            </p>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                Organizamos <strong>eventos, workshops, palestras, campanhas de conscientização</strong> e outras ações que contribuem para o <strong>bem-estar da comunidade</strong>, <strong>promovendo a educação, saúde, cultura, inclusão social</strong> e <strong>proteção ambiental</strong>.
            </p>
        </div>
    </div>
</div>

@endsection
