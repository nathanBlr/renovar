@extends('rotas.base')

@section('title', 'Início')

@section('content')

<div class="relative">
    <!-- Carrossel -->
    <div id="default-carousel" class="relative w-full h-screen bg-slate-600" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-full overflow-hidden rounded-lg">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('Fotos/Santa-Casa-da-Misericordia-de-Ferreira-do-zezere-IMG_5998.webp') }}" class="absolute inset-0 w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('Fotos/IMG_4197.JPG') }}" class="absolute inset-0 w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('Fotos/SCMFZ.jpg') }}" class="absolute inset-0 w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('Fotos/05.jpg') }}" class="absolute inset-0 w-full h-full object-cover" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
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





<!-- Seções de conteúdo em cards e carrosséis -->
<div class="container mx-auto mt-8">
    <!-- Seção de destaques -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card de destaque com o vídeo -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Vídeo das Atividades da Santa Casa</h2>
            <!-- Substitua 'URL_DO_SEU_VIDEO' pelo link do seu vídeo -->
            <div class="responsive-video">
                <iframe width="100%" src="https://www.youtube.com/embed/nmUu-osKmEk" title="Marcha da Santa Casa da Misericórdia de Ferreira do Zêzere 2015" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <p>Proporcionamos consultas médicas gratuitas para membros da comunidade em situação financeira desfavorável. Nosso objetivo é garantir que todos tenham acesso aos cuidados de saúde de que precisam, independentemente de sua capacidade de pagamento</p>
            <a href="https://youtu.be/nmUu-osKmEk" class="text-blue-500 mt-2 inline-block hover:underline">Assistir Agora</a>
        </div>
    
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Clínica Médica Gratuita</h2>
            <img src="{{ asset('Fotos/fz-vicente-saude-0169990085_818233773257400062_n-780x470.jpg') }}" alt="Imagem Clínica Médica" class="w-full h-auto rounded-lg mb-4">
            <p>Proporcionamos consultas médicas gratuitas para membros da comunidade em situação financeira desfavorável. Nosso objetivo é garantir que todos tenham acesso aos cuidados de saúde de que precisam, independentemente de sua capacidade de pagamento</p>
            <a href="#" class="text-blue-500 mt-2 inline-block hover:underline">Saiba mais</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Nossa História</h2>
            <img src="{{ asset('Fotos/Dornes_resultado.jpg') }}" alt="Foto Histórica de Ferreira de Zêzere" class="w-full h-auto rounded-lg mb-4">
            <p>A Santa Casa da Misericórdia de Ferreira de Zêzere, fundada há décadas, é um pilar na comunidade local. Nosso compromisso em fornecer assistência médica, apoio social e cuidados de qualidade continua a moldar a história de Ferreira de Zêzere. Saiba mais sobre nossa trajetória na seção de História</p>
            <a href="#" class="text-blue-500 mt-2 inline-block hover:underline">Saiba mais</a>
        </div>
        
        
        <!-- Adicione mais cards de destaque aqui, se necessário -->
    </div>
    

    <div class="mt-8 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="relative">
                <img src="{{ asset('Fotos/fz-vicente-saude-0169990085_818233773257400062_n-780x470.jpg') }}" alt="Imagem 1" class="w-full h-64 object-cover object-center rounded-t-lg">
                <div class="absolute inset-0 flex items-center justify-center">
                    <a href="#" class="block bg-blue-500 text-white text-center font-semibold py-2 px-4 rounded-lg hover:bg-blue-600">Detalhes</a>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Título da Notícia 1</h3>
                <p class="text-gray-700 mb-4">Descrição breve da notícia ou projeto. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="relative">
                <img src="{{ asset('Fotos/SCMFZ.jpg') }}" alt="Imagem 2" class="w-full h-64 object-cover object-center rounded-t-lg">
                <div class="absolute inset-0 flex items-center justify-center">
                    <a href="#" class="block bg-blue-500 text-white text-center font-semibold py-2 px-4 rounded-lg hover:bg-blue-600">Detalhes</a>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Título da Notícia 2</h3>
                <p class="text-gray-700 mb-4">Descrição breve da notícia ou projeto. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    
        <!-- Adicione mais cards a
    
    
</div>

<!-- Inicialize o carrossel -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
@endsection
