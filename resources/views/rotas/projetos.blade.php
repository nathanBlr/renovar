@extends('rotas.base')

@section('title', 'Projetos')

@section('content')
<div class="px-4 sm:px-6 lg:px-8">
    <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center font-fredericka pt-6 pb-3">Projetos</h1>
    <hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>

    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row md:space-x-6">
        <div class="flex-1">
            <!-- Seus projetos aqui -->
            <a class="flex flex-col items-center border border-gray-200 h-60 md:h-80 shadow md:flex-row md:w-full relative overflow-hidden group">
                <div style="background-image:url('{{ asset('santacasa faxada.webp') }}')" class="absolute top-0 left-0 w-full h-full transition-opacity duration-500 ease-in-out opacity-100 group-hover:opacity-0 pointer-events-none">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                    <h5 class="mb-2 text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Visitação da instituição 2024</h5>
                    <hr class="my-4 sm:my-6 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10"/>
                    <p class="mb-3 text-sm sm:text-base md:text-lg lg:text-xl font-normal text-gray-700 dark:text-gray-400 font-[verdana]">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>
            <a class="flex flex-col items-center border border-gray-200 h-60 md:h-80 shadow md:flex-row md:w-full relative overflow-hidden group">
                <div style="background-image:url('{{ asset('Fotos/Dornes_resultado.jpg') }}')" class="absolute top-0 left-0 w-full h-full transition-opacity duration-500 ease-in-out opacity-100 group-hover:opacity-0 pointer-events-none">
                </div>
                    <div class="flex flex-col justify-between p-4 leading-normal z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                        <h5 class="mb-2 text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Observação das estrelas 2025</h5>
                        <hr class="my-4 sm:my-6 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10"/>
                        <p class="mb-3 text-sm sm:text-base md:text-lg lg:text-xl font-normal text-gray-700 dark:text-gray-400 font-[verdana]">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
            </a>
            <a class="flex flex-col items-center border border-gray-200 h-60 md:h-80 shadow md:flex-row md:w-full relative overflow-hidden group">
                <div style="background-image:url('{{ asset('Fotos/vv_07_ferreirazezere_dornes.jpg') }}')" class="absolute top-0 left-0 w-full h-full transition-opacity duration-500 ease-in-out opacity-100 group-hover:opacity-0 pointer-events-none">
                </div>
                    <div class="flex flex-col justify-between p-4  leading-normal z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                        <h5 class="mb-2 text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Caminhada pela paz Ferreira de Zezêre 2030</h5>
                        <hr class="my-4 sm:my-6 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10"/>
                        <p class="mb-3 text-sm sm:text-base md:text-lg lg:text-xl font-normal text-gray-700  dark:text-gray-400 font-[verdana]">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
            </a>
        </div>

        <div class="flex-1">
            <div class="container mx-auto max-w-3xl bg-gray-200 rounded-lg p-6">
                <div class="relative overflow-hidden bg-cover bg-no-repeat">
                    <img class="rounded-t-lg mx-auto" src="https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg" alt="Imagem de Projetos" />
                </div>
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white mt-6">O que são nossos projetos?</h1>
                <p class="text-lg text-gray-600 dark:text-gray-400 mt-3">
                    Nossos projetos são atividades cuidadosamente planejadas e executadas para <strong>promover a transformação social</strong> e o <strong>desenvolvimento sustentável</strong> da comunidade. Através de <strong>iniciativas inovadoras e engajadoras</strong>, buscamos <strong>impactar positivamente a vida das pessoas</strong>, <strong>fortalecendo os laços sociais</strong> e <strong>construindo um futuro melhor para todos</strong>.
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-400 mt-3">
                    Organizamos <strong>eventos, workshops, palestras, campanhas de conscientização</strong> e outras ações que contribuem para o <strong>bem-estar da comunidade</strong>, <strong>promovendo a educação, saúde, cultura, inclusão social</strong> e <strong>proteção ambiental</strong>.
                </p>
            </div>
        </div>
    </div>
    <hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>
</div>
@endsection
