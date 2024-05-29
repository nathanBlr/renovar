@extends('rotas.base')

@section('title', 'Início')

@section('content')
<div class="relative">
    <!-- Carrossel -->
    <div id="default-carousel" class="relative w-full h-screen bg-slate-600" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-full overflow-hidden rounded-lg">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="relative w-full h-full overflow-hidden">
                  <img src="{{ asset('Fotos/fz-vicente-saude-0169990085_818233773257400062_n-780x470.jpg') }}" class="absolute inset-0 w-full h-full object-cover" alt="..." />
                  <div class="absolute bottom-9 right-9 flex flex-col justify-end items-end px-6 py-6 bg-gray-900 bg-opacity-50 backdrop-blur-md">
                    <h5 class="text-xl text-white font-bold mb-2">Card Title</h5>
                    <p class="text-white text-base">A brief description of the image content.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded hover:bg-blue-700 focus:ring-4 focus:ring-blue-500">Learn More</a>
                  </div>
                </div>
              </div>
              
            
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="relative w-full h-full overflow-hidden">
                  <img src="{{ asset('Fotos/IMG_4197.JPG') }}" class="absolute inset-0 w-full h-full object-cover" alt="..." />
                  <div class="absolute bottom-9 right-9 flex flex-col justify-end items-end px-6 py-6 bg-gray-900 bg-opacity-50 backdrop-blur-md">
                    <h5 class="text-xl text-white font-bold mb-2">Card Title</h5>
                    <p class="text-white text-base">A brief description of the image content.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded hover:bg-blue-700 focus:ring-4 focus:ring-blue-500">Learn More</a>
                  </div>
                </div>
              </div>
              
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="relative w-full h-full overflow-hidden">
                    <img src="{{ asset('Fotos/SCMFZ.jpg') }}" class="absolute inset-0 w-full h-full object-cover" alt="..." />
                    <div class="absolute bottom-9 right-9 flex flex-col justify-end items-end px-6 py-6 bg-gray-900 bg-opacity-50 backdrop-blur-md">
                      <h5 class="text-xl text-white font-bold mb-2">Card Title</h5>
                      <p class="text-white text-base">A brief description of the image content.</p>
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded hover:bg-blue-700 focus:ring-4 focus:ring-blue-500">Learn More</a>
                    </div>
                  </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="relative w-full h-full overflow-hidden">
                  <img src="{{ asset('Fotos/rio-zezere.jpg') }}" class="absolute inset-0 w-full h-full object-cover" alt="..." />
                  <div class="absolute bottom-9 right-9 flex flex-col justify-end items-end px-6 py-6 bg-gray-900 bg-opacity-50 backdrop-blur-md">
                    <h5 class="text-xl text-white font-bold mb-2">Card Title</h5>
                    <p class="text-white text-base">A brief description of the image content.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded hover:bg-blue-700 focus:ring-4 focus:ring-blue-500">Learn More</a>
                  </div>
                </div>
              </div>
              
        </div>
        <!-- Slider indicators -->
        
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <div class="btn-group justify-end">  
            <div
            class="inline-flex rounded-md shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-1 dark:focus:shadow-dark-1 dark:active:shadow-dark-1"
            role="group">
            <button type="button" class="inline-block rounded-s bg-[#E5E7EB] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-[#68c8e3] hover:text-gray-800 transition duration-150 ease-in-out hover:bg-primary-accent-300 focus:bg-primary-accent-300 focus:outline-none focus:ring-0 active:bg-primary-600 motion-reduce:transition-none" data-twe-ripple-init data-twe-ripple-color="light" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-inherit dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 bg-inherit dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                  </svg>
                  <span class="sr-only">Previous</span>
                </span>
              </button>    
              <button type="button" class="inline-block rounded-e bg-[#E5E7EB] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-[#68c8e3] hover:text-gray-800 transition duration-150 ease-in-out hover:bg-primary-accent-300 focus:bg-primary-accent-300 focus:outline-none focus:ring-0 active:bg-primary-600 motion-reduce:transition-none" data-twe-ripple-init data-twe-ripple-color="light" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-inherit dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                   <span class="sr-only">Next</span>
                </span>
              </button>
          </div>
            </div>
        </div>           
</div>


<!-- Navbar -->
<nav class="bg-gray-800 text-white py-4">
    <div class="container mx-auto">
        <!-- Navbar content here -->
        <div class="flex justify-between items-center">
            <a href="#" class="text-white hover:text-gray-200">Link 1</a>
            <a href="#" class="text-white hover:text-gray-200">Link 2</a>
            <a href="#projetos" class="text-white hover:text-gray-200">Projetos</a>
            <!-- Add more links as needed -->
        </div>
    </div>
</nav>
<hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10"/>




<!-- Seções de conteúdo em cards e carrosséis -->
<section class="container mx-auto mt-16">
    <h2 class="text-3xl font-bold mb-8">Notícias e Eventos</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="card rounded-lg shadow-md p-4">
        <img src="{{ asset('Fotos/noticia1.jpg') }}" alt="Imagem da Notícia 1" class="w-full h-200 object-cover object-center rounded-lg mb-4">
        <h3 class="text-lg font-bold mb-2">Título da Notícia 1</h3>
        <p class="text-gray-700 mb-4">Descrição breve da notícia. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
       
    </div>
    <a href="{{ route('rotas.index', 'noticias') }}" class="loading-link bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><button>
      Noticias
        </button></a>
      </div>
      <div class="card rounded-lg shadow-md p-4">
        <img src="{{ asset('Fotos/noticia2.jpg') }}" alt="Imagem da Notícia 2" class="w-full h-200 object-cover object-center rounded-lg mb-4">
        <h3 class="text-lg font-bold mb-2">Título da Notícia 2</h3>
        <p class="text-gray-700 mb-4">Descrição breve da notícia. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </section>
  <section class="container mx-auto mt-16 bg-gray-100 py-8" >
    <div class="flex flex-col items-center justify-center text-center">
      <h2 class="text-3xl font-bold mb-4">Em Busca de Documentação?</h2>
      <p class="text-gray-700 mb-6">Seja um voluntário, faça uma doação ou participe de um dos nossos eventos.</p>
      <a href="{{ route('rotas.index','documentacao') }}" class="loading-link px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Saiba Mais</a>
    </div>
  </section>
  <section class="container mx-auto mt-16" >
    <h2 class="text-3xl font-bold mb-8">Conheça um Pouco de nossa historia</h2>
    <div class="flex flex-col items-center justify-center text-center">
      <h2 class="text-3xl font-bold mb-4">Junte-se a nós e faça a diferença!</h2>
      <p class="text-gray-700 mb-6">Seja um voluntário, faça uma doação ou participe de um dos nossos eventos.</p>
      <a href="{{ route('rotas.index','historia') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Saiba Mais</a>
    </div>
  </section>
  <section class="container mx-auto mt-16 bg-gray-100 py-8" >
    <div class="flex flex-col items-center justify-center text-center">
      <h2 class="text-3xl font-bold mb-4">Busca Mais Informações?</h2>
      <p class="text-gray-700 mb-6">Seja um voluntário, faça uma doação ou participe de um dos nossos eventos.</p>
      <a href="#footer" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Saiba Mais</a>
    </div>
  </section>
  <section class="container mx-auto mt-16 bg-gray-100 py-8" >
    <div class="flex flex-col items-center justify-center text-center">
      <h2 class="text-3xl font-bold mb-4">Junte-se a nós e faça a diferença!</h2>
      <p class="text-gray-700 mb-6">Seja um voluntário, faça uma doação ou participe de um dos nossos eventos.</p>
      <a href="#footer" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Saiba Mais</a>
    </div>
  </section>
  <section id="projetos" class="container mx-auto mt-16 bg-white py-8">
    <div class="flex flex-col items-center justify-center text-center">
        <h2 class="text-3xl font-bold mb-4 font-fredericka">Projetos</h2>
        <a href="{{ route('rotas.index','projetos') }}" class="loading-link flex items-center w-full  border text-gray-900 border-gray-200 rounded-lg shadow hover:text-[#68c8e3] hover:bg-gray-200 focus:bg-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:bg-gray-700 transition duration-300 ease-in-out">
          <img class="w-48 h-48 rounded-full shadow-lg" src="{{ asset('Fotos/05.jpg') }}" alt="Bonnie image"/>
          <div class="p-4">
              <h5 class="mb-2 text-2xl font-bold tracking-tight font-fredericka dark:text-white">Noteworthy technology acquisitions 2021</h5>
              <p class="mb-3 font-normal font-serif dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
          </div>
      </a>
  
        <a href="{{ route('rotas.index','projetos') }}" class="loading-link flex items-center w-full  border text-gray-900 border-gray-200 rounded-lg shadow hover:text-[#68c8e3] hover:bg-gray-200 focus:bg-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:bg-gray-700 transition duration-300 ease-in-out">
          <img class="w-48 h-48 rounded-full shadow-lg" src="{{ asset('Polo II.webp') }}" alt="Bonnie image"/>
          <div class="p-4">
              <h5 class="mb-2 text-2xl font-bold tracking-tight font-fredericka dark:text-white">Noteworthy technology acquisitions 2021</h5>
              <p class="mb-3 font-normal font-serif dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
          </div>
      </a>
      
      <a href="{{ route('rotas.index','projetos') }}" class="loading-link flex items-center w-full  border text-gray-900 border-gray-200 rounded-lg shadow hover:text-[#68c8e3] hover:bg-gray-200 focus:bg-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:bg-gray-700 transition duration-300 ease-in-out">
        <img class="w-48 h-48 rounded-full shadow-lg" src="{{ asset('projetos.webp') }}" alt="Bonnie image"/>
        <div class="p-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight font-fredericka dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="mb-3 font-normal font-serif dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </a>
    </div>
</section>

  <section class="container mx-auto mt-16 bg-gray-100 py-8" >
    <!-- UM CARROUSEL COM AS FOTOS DA GALERIA -->
    <div class="flex flex-col items-center justify-center text-center">
      <h2 class="text-3xl font-bold mb-4">GALERIA</h2>
      <p class="text-gray-700 mb-6">Seja um voluntário, faça uma doação ou participe de um dos nossos eventos.</p>
    </div>
  </section>


<section class="container mx-auto mt-16 bg-gray-100 py-8" >
  <div class="flex justify-center">
    <h2 class="text-3xl font-bold mb-4">Venha Conhecer Nossas Valencias</h2>
</div>
  <div class="flex flex-col md:flex-row col-span-3 items-center justify-center text-center">
    
    <div class="md:w-1/3 mx-2 mb-4">
        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </div>

    <div class="md:w-1/3 mx-2 mb-4">
        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </div>

    <div class="md:w-1/3 mx-2 mb-4">
        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </div>
</div>

<div class="flex justify-center">
    <a href="{{ route('rotas.index','valencias') }}" class="loading-link px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 mt-4">Saiba Mais</a>
</div>


</section>
  
 
  
@endsection
