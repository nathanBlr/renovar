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
                  <div class="absolute bottom-[64px] right-12 flex flex-col justify-end items-end px-6 py-6 bg-gray-900 bg-opacity-50 backdrop-blur-md">
                    <h5 class="text-xl text-white font-bold mb-2">Novo Centro De Saude</h5>
                    <p class="text-white text-base">Um centro de saude para a população</p>
                    <a href="{{ route('rotas.index','noticias') }}" class="loading-link inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#68c8e3] rounded hover:bg-blue-700 focus:ring-4 focus:ring-blue-500">Conheça Mais</a>
                  </div>
                </div>
              </div>
              
            
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="relative w-full h-full overflow-hidden">
                  <img src="{{ asset('Fotos/IMG_4197.JPG') }}" class="absolute inset-0 w-full h-full object-cover" alt="..." />
                  <div class="absolute bottom-[64px] right-12 flex flex-col justify-end items-end px-6 py-6 bg-gray-900 bg-opacity-50 backdrop-blur-md">
                    <h5 class="text-xl text-white font-bold mb-2">Festas</h5>
                    <p class="text-white text-base">Festa de São Miguel</p>
                    <a href="{{ route('rotas.index','noticias') }}" class="loading-link inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#68c8e3] rounded hover:bg-blue-700 focus:ring-4 focus:ring-blue-500">Conheça Mais</a>
                  </div>
                </div>
              </div>
              
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="relative w-full h-full overflow-hidden">
                    <img src="{{ asset('Fotos/SCMFZ.jpg') }}" class="absolute inset-0 w-full h-full object-cover" alt="..." />
                    <div class="absolute bottom-[64px] right-12 flex flex-col justify-end items-end px-6 py-6 bg-gray-900 bg-opacity-50 backdrop-blur-md">
                      <h5 class="text-xl text-white font-bold mb-2">Centro de Coleta</h5>
                      <p class="text-white text-base">Venha participar de nossos projetos</p>
                      <a href="{{ route('rotas.index','projetos') }}" class="loading-link inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#68c8e3] rounded hover:bg-blue-700 focus:ring-4 focus:ring-blue-500">Conheça Mais</a>
                    </div>
                  </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="relative w-full h-full overflow-hidden">
                  <img src="{{ asset('Fotos/rio-zezere.jpg') }}" class="absolute inset-0 w-full h-full object-cover" alt="..." />
                  <div class="absolute bottom-[64px] right-12 flex flex-col justify-end items-end px-6 py-6 bg-gray-900 bg-opacity-50 backdrop-blur-md">
                    <h5 class="text-xl text-white font-bold mb-2">Caminhada pela Vida</h5>
                    <p class="text-white text-base">23/06 Venha participar de nossa caminhada</p>
                    <a href="{{ route('rotas.index','noticias') }}" class="loading-link inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#68c8e3] rounded hover:bg-blue-700 focus:ring-4 focus:ring-blue-500">Conheça Mais</a>
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
<nav class="bg-[#E5E7EB] text-[#68c8e3] py-4">
  <div class="container mx-auto">
      <!-- Navbar content here -->
      <div class="flex justify-between items-center">
          <!-- Logo or site name can be placed here for mobile -->
          <a  class="block lg:hidden" id="toggleMenu">
              <!-- Hamburger icon -->
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
          </a>
          <a href="{{ route('rotas.index','historia') }}" class="loading-link hidden lg:block font-bold text-[#68c8e3] hover:text-gray-800 ">Historia</a>
          <a href="#footer" class="hidden lg:block font-bold text-[#68c8e3] hover:text-gray-800">Contatos</a>
          <a href="{{ route('rotas.index','projetos') }}" class="loading-link hidden lg:block font-bold text-[#68c8e3] hover:text-gray-800">Projetos</a>
          <a href="{{ route('rotas.index','noticias') }}" class="loading-link hidden lg:block font-bold text-[#68c8e3] hover:text-gray-800">Notícias</a>
          <a href="{{ route('rotas.index','documentacao') }}" class="loading-link hidden lg:block font-bold text-[#68c8e3] hover:text-gray-800">Documentação</a>
          <!-- Add more links as needed -->
      </div>
  </div>

  <!-- Mobile navigation menu -->
  <div id="opcao" class="hidden lg:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#historia" class="block font-bold text-[#68c8e3] hover:text-gray-800">Historia</a>
        <a href="#footer" class="block font-bold text-[#68c8e3] hover:text-gray-800">Contatos</a>
        <a href="#projetos" class="block font-bold text-[#68c8e3] hover:text-gray-800">Projetos</a>
        <a href="#noticias" class="block font-bold text-[#68c8e3] hover:text-gray-800">Notícias</a>
        <a href="#documentacao" class="block font-bold text-[#68c8e3] hover:text-gray-800">Documentação</a>        
          <!-- Add more links as needed -->
      </div>
  </div>
</nav>


<!-- Noticias -->
<hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>
<section id="noticias" class="container mx-auto mt-16">
  <h2 class="text-3xl font-bold mb-8 text-center">Ultimas Notícias</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="card rounded-lg shadow-md p-4">
          <img src="{{ asset('Fotos/notícias-34802664.webp') }}" alt="Imagem da Notícia 1" class="w-full h-200 object-cover object-center rounded-lg mb-4">
          <h3 class="text-lg font-bold mb-2">Título da Notícia 1</h3>
          <p class="text-gray-700 mb-4">Descrição breve da notícia. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="card rounded-lg shadow-md p-4">
          <img src="{{ asset('Fotos/fundo-do-boletim-de-noticias-da-terra-de-tecnologia-global_1017-33687.avif') }}" alt="Imagem da Notícia 2" class="w-full h-200 object-cover object-center rounded-lg mb-4">
          <h3 class="text-lg font-bold mb-2">Título da Notícia 2</h3>
          <p class="text-gray-700 mb-4">Descrição breve da notícia. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
  </div>
  <div class="flex justify-center mt-8">
      <a href="{{ route('rotas.index', 'noticias') }}" class="loading-link bg-[#68c8e3] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center">
          <button>
              Noticias
          </button>
      </a>
  </div>
</section>



<!-- Documentação -->
  <hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>
  <section id="documentacao" class="container mx-auto mt-8 bg-gray-100 py-4 sm:py-8">
    <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col sm:flex-row">
        <a class="flex-none sm:w-1/2">
            <img class="rounded-t-lg sm:rounded-l-lg sm:rounded-t-none w-full h-48 sm:h-full object-cover" src="{{ asset('documents.webp') }}" alt="Image Description" />
        </a>
        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
            <div>
                <a >
                    <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Em Busca De Documentação?</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm sm:text-base pt-5">Aqui você encontra todos os documentos relacionados à nossa instituição. Explore uma coleção abrangente que abrange diversas áreas de interesse e mantenha-se atualizado com as informações mais recentes. Descubra mais sobre nossas iniciativas, projetos e muito mais.</p>
            </div>
            <a href="{{ route('rotas.index', 'documentacao')}}" class="inline-block w-full sm:w-auto items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#68c8e3] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Documentação
                
            </a>
        </div>
    </div>
</section>

<!-- Historia -->
<hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>
<section id="historia" class="container mx-auto mt-16">
    <h2 class="text-3xl font-bold mb-8 text-center">Conheça um Pouco de Nossa História</h2>
    <div class="w-full">
        <img class="rounded-lg w-full h-auto object-cover" src="{{ asset('Fotos/rio-zezere.jpg') }}" alt="Foto Antiga da Instituição" />
    </div>
    <div class="w-full p-6 md:p-10 text-center">
        <h2 class="text-4xl font-bold mb-6 text-[#68c8e3]">Junte-se a nós e faça a diferença!</h2>
        <p class="text-gray-700 text-lg mb-8">Seja um voluntário, faça uma doação ou participe de um dos nossos eventos. Venha conhecer mais sobre nossa história e como você pode contribuir para um futuro melhor. Nossa trajetória é marcada por muitas conquistas e você pode fazer parte dela!</p>
        <a href="{{ route('rotas.index', 'historia') }}" class="px-5 py-3 bg-[#68c8e3] text-white text-lg font-semibold rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300">Saiba Mais</a>
    </div>
</section>


<!-- Contatos -->
<hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>
<section class="w-full mx-auto mt-16 bg-gray-100 py-8">
    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6">
        <div class="flex flex-col items-center justify-center text-center mb-6">
            <h2 class="text-3xl font-bold mb-4">Busca Mais Informações?</h2>
            <p class="text-gray-700 mb-6">Entre em contacto por meio de nossas redes sociais</p>
        </div>
        <div class="flex justify-around mb-6">
            <img class="w-1/4 rounded-lg" src="{{ asset('Fotos/getty_991166232_2000135220009280424_402970.jpg') }}" alt="Imagem 1" />
            <img class="w-1/4 rounded-lg" src="{{ asset('Fotos/Wooden_There-Is-No-Greater-Joy-in-Life-Than-Helping-Others-1024x682.jpg') }}" alt="Imagem 2" />
            <img class="w-1/4 rounded-lg" src="{{ asset('Fotos/Customer_care.jpg') }}" alt="Imagem 3" />
        </div>
        <div class="flex justify-center">
            <a href="#footer" class="px-5 py-3 bg-[#68c8e3] text-white text-lg font-semibold rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300">Contatos</a>
        </div>
    </div>
</section>


<!-- Projetos -->
<hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>
<section id="projetos" class="container mx-auto mt-16 bg-white py-8">
    <div class="flex flex-col items-center justify-center text-center">
        <h2 class="text-3xl font-bold mb-4 font-fredericka">Projetos</h2>
        <h2 class="text-3xl font-bold mb-4">Junte-se a nós e faça a diferença!</h2>
        <p class="text-gray-700 mb-6">Seja um voluntário, faça uma doação ou participe de um dos nossos eventos.</p>     
        <a href="{{ route('rotas.index','projetos') }}" class="loading-link flex flex-col md:flex-row items-center w-full mb-6 border text-gray-900 border-gray-200 rounded-lg shadow hover:text-[#68c8e3] hover:bg-gray-200 focus:bg-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:bg-gray-700 transition duration-300 ease-in-out">
            <img class="w-48 h-48 md:w-48 md:h-auto rounded-lg shadow-lg md:mr-4" src="{{ asset('Fotos/05.jpg') }}" alt="Bonnie image"/>
            <div class="p-4">
                <h5 class="mb-2 text-2xl font-bold tracking-tight font-fredericka dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal font-serif dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
        <a href="{{ route('rotas.index','projetos') }}" class="loading-link flex flex-col md:flex-row items-center w-full mb-6 border text-gray-900 border-gray-200 rounded-lg shadow hover:text-[#68c8e3] hover:bg-gray-200 focus:bg-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:bg-gray-700 transition duration-300 ease-in-out">
            <img class="w-48 h-48 md:w-48 md:h-auto rounded-lg shadow-lg md:mr-4" src="{{ asset('Polo II.webp') }}" alt="Bonnie image"/>
            <div class="p-4">
                <h5 class="mb-2 text-2xl font-bold tracking-tight font-fredericka dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal font-serif dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
        <a href="{{ route('rotas.index','projetos') }}" class="loading-link flex flex-col md:flex-row items-center w-full mb-6 border text-gray-900 border-gray-200 rounded-lg shadow hover:text-[#68c8e3] hover:bg-gray-200 focus:bg-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:bg-gray-700 transition duration-300 ease-in-out">
            <img class="w-48 h-48 md:w-48 md:h-auto rounded-lg shadow-lg md:mr-4" src="{{ asset('projetos.webp') }}" alt="Bonnie image"/>
            <div class="p-4">
                <h5 class="mb-2 text-2xl font-bold tracking-tight font-fredericka dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal font-serif dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
    </div>
</section>


<!-- Galeria -->
<hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>
  <section class="container mx-auto mt-16 bg-gray-100 py-8" >
    <!-- UM CARROUSEL COM AS FOTOS DA GALERIA -->
    <div class="flex flex-col items-center justify-center text-center">
      <h2 class="text-3xl font-bold mb-4">GALERIA</h2>
    </div>
      <div
    id="carouselExampleSlidesOnly"
    class="relative"
    data-twe-carousel-init
    data-twe-ride="carousel">
    <!--Carousel items-->
    <div
      class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
      <!--First item-->
      <div
        class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-twe-carousel-item
        data-twe-carousel-active>
        <img
          src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
          class="block w-full  rounded-lg shadow-none transition-shadow duration-300 ease-in-out hover:shadow-lg hover:shadow-black/30 "
          alt="Wild Landscape" />
      </div>
      <!--Second item-->
      <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-twe-carousel-item>
        <img
          src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
          class="block w-full"
          alt="Camera" />
      </div>
      <!--Third item-->
      <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-twe-carousel-item>
        <img
          src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
          class="block w-full"
          alt="Exotic Fruits" />
      </div>
    </div>
  </div>
  <p class="text-gray-700 text-center font-bold mb-6">Seja um voluntário, faça uma doação ou participe de um dos nossos eventos.</p>
  </section>


  <!-- Valencias -->
<hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>
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
    <a href="{{ route('rotas.index','valencias') }}" class="loading-link px-4 py-2 bg-[#68c8e3] text-white rounded-lg hover:bg-blue-600 mt-4">Saiba Mais</a>
</div>
</section>
<hr class="my-12 h-0.5 border-t-0 bg-[#68c8e3] dark:bg-white/10"/>  
 
<script>
  document.getElementById('toggleMenu').addEventListener('click', function() {
    var menu = document.getElementById('opcao');
    menu.classList.toggle('hidden');
  });
</script> 
@endsection
