<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Santa Casa')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('logo.webp') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
    />

    <style>
        @yield('style')
        /* Dark Mode Classes */
        .dark .bg-white {
            background-color:  #F3F4F6;
            color: #68c8e3;
        }

        .dark .text-gray-800 {
            color: #f3f4f6;
        }

        .dark .bg-gray-200 {
            background-color: #4b5563;
        }

        .responsive-video {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%; /* Proporção 16:9 */
        }

        .responsive-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        /* CSS for loading logo animation */
        @keyframes grow {
            0% { transform: scale(1); }
            50% { transform: scale(1.3); } /* Increase scale factor */
            100% { transform: scale(1); }
        }


        #loading-logo {
            animation: grow 1.5s infinite; /* Adjust animation duration as needed */
        }

    </style>

</head>
<body class="bg-white text-gray-800">
    <header>
            <nav class="relative lg:fixed top-0 z-50 w-full flex items-center justify-between bg-[#E5E7EB] py-2 shadow-md dark:bg-neutral-700 lg:py-4">
        
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Logo and Title -->
        <div class="flex items-center">
            <a class="loading-link mx-2 my-1 flex items-center lg:mb-0 lg:mt-0" href="{{ route('rotas.index','inicio') }}">
                <img class="me-2" src="{{ asset('logo.webp') }}" style="height: 64px" alt="Santa Casa" loading="lazy" />
                
                <span class="text-black dark:text-white text-2xl font-fredericka pointer-events-none">Santa Casa Da Misericórdia <br> Ferreira De Zézere</span>
            </a>
        </div>

        <!-- Search Bar -->
        <div class="flex items-center lg:w-[30%] w-full mt-2 lg:mt-0">
            <input type="search" class="relative m-0 block w-full rounded border border-solid border-gray-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition duration-300 ease-in-out focus:border-blue-500 focus:text-gray-700 focus:outline-none dark:border-white/10 dark:bg-gray-800 dark:text-white dark:placeholder:text-neutral-300" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" />
            <span class="flex items-center px-3 py-1.5 text-center text-base font-normal text-gray-600 dark:text-white" id="basic-addon2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                </svg>
            </span>
        </div>

        <!-- Mobile Menu Button -->
        <div class="lg:hidden flex items-center">
            <button id="menu-button" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <div id="menu" class="hidden lg:flex lg:flex-row lg:space-x-6 lg:items-center lg:w-auto w-full mt-4 lg:mt-0">
    <ol class="lg:flex flex-wrap lg:flex-row lg:space-x-6 lg:items-center lg:w-auto w-full">
        <li><a href="{{ route('rotas.index','historia') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">História</a></li>
        <li><a href="{{ route('rotas.index','noticias') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Notícias</a></li>
        <li><a href="{{ route('rotas.index','valencias') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Valências</a></li>
        <li><a href="{{ route('rotas.index','documentacao') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Documentação</a></li>
        <li><a href="{{ route('rotas.index','projetos') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Projetos</a></li>
        <li><a href="{{ route('rotas.index','contatos') }}" class="text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Contatos</a></li>
    </ol>
</div>

</nav>
<div class="lg:pt-16"></div>
<script>
    document.getElementById('menu-button').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    });
</script>


</header>
<!-- Loading Overlay -->
<div id="loading-overlay" class="fixed inset-0 flex flex-col items-center justify-center bg-white bg-opacity-75 z-50 hidden">
    <img id="loading-logo" src="{{ asset('logo.webp') }}" style="height: 64px" alt="Santa Casa" loading="lazy" />
    <p class="text-gray-700 mt-4">Carregando...</p>
</div>

    <main class=" justify-center">
        @yield('content')
        <!-- Back to top button -->
<button
  type="button"
  data-twe-ripple-init
  data-twe-ripple-color="light"
  class="!fixed bottom-5 end-5 hidden rounded-full bg-[#68c8e3] p-3 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-gray-800 hover:shadow-lg focus:bg-slate-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-500 active:shadow-lg"
  id="btn-back-to-top">
  <span class="[&>svg]:w-4">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="3"
      stroke="currentColor">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
    </svg>
  </span>
</button>
    </main>
    <!-- Loading Overlay -->
    <footer class="bg-gray-200 mt-10 py-6" id="footer">
    <div class="container mx-auto text-center">
        <!-- Social Media Links -->
        <div class="flex flex-col justify-center space-x-2 mb-4">
            <a href="https://www.facebook.com/cmferreiradozezere/" class="loading-link">
            <button
                type="button"
                data-twe-ripple-init
                data-twe-ripple-color="light"
                class="mb-2 inline-block rounded bg-[#1877f2] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                <span class="[&>svg]:h-4 [&>svg]:w-4">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 320 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                    <path
                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                    </svg>
                </span>
            </button>
        </a>
            <!-- Telegram -->
            <a href="https://web.telegram.org/" class="loading-link">
                <button
                type="button"
                data-twe-ripple-init
                data-twe-ripple-color="light"
                class="mb-2 inline-block rounded bg-[#0088cc] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                <span class="[&>svg]:h-4 [&>svg]:w-4">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 496 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                    <path
                        d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z" />
                    </svg>
                </span>
                </button>
            </a>
            <!-- Instagram -->
            <a href="https://www.instagram.com/municipiodeferreiradozezere/" class="loading-link">
                <button
                type="button"
                data-twe-ripple-init
                data-twe-ripple-color="light"
                class="mb-2 inline-block rounded bg-[#c13584] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                <span class="[&>svg]:h-4 [&>svg]:w-4">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                    <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </span>
                </button>
            </a>
                <!-- Messenger -->
                <a href="https://www.messenger.com/" class="loading-link">
                    <button
                    type="button"
                    data-twe-ripple-init
                    data-twe-ripple-color="light"
                    class="mb-2 inline-block rounded bg-[#0084ff] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 512 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                        <path
                            d="M256.6 8C116.5 8 8 110.3 8 248.6c0 72.3 29.7 134.8 78.1 177.9 8.4 7.5 6.6 11.9 8.1 58.2A19.9 19.9 0 0 0 122 502.3c52.9-23.3 53.6-25.1 62.6-22.7C337.9 521.8 504 423.7 504 248.6 504 110.3 396.6 8 256.6 8zm149.2 185.1l-73 115.6a37.4 37.4 0 0 1 -53.9 9.9l-58.1-43.5a15 15 0 0 0 -18 0l-78.4 59.4c-10.5 7.9-24.2-4.6-17.1-15.7l73-115.6a37.4 37.4 0 0 1 53.9-9.9l58.1 43.5a15 15 0 0 0 18 0l78.4-59.4c10.4-8 24.1 4.5 17.1 15.6z" />
                        </svg>
                    </span>
                    </button>
                </a>
            <!-- Whatsapp -->
                <a href="https://www.whatsapp.com/w/249360190" class="loading-link">
                <button
                type="button"
                data-twe-ripple-init
                data-twe-ripple-color="light"
                class="mb-2 inline-block rounded bg-[#128c7e] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                <span class="[&>svg]:h-4 [&>svg]:w-4">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                    <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                </span>
                </button>
                </a>
        </div>
<!-- Footer Content -->
        <div class="flex flex-wrap justify-center mt-8">
            <!-- Additional Information -->
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <h2 class="text-xl font-bold mb-4">Areas de nosso site</h2>
                <hr class="bg-[#68c8e3]">
                <ul class="text-left ">
                    <li class="text-center"><a href="{{ route('rotas.index','historia') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">História</a></li>
                    <hr class="bg-[#68c8e3]">
                    <li class="text-center"><a href="{{ route('rotas.index','noticias') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Notícias</a></li>
                    <hr class="bg-[#68c8e3]">
                    <li class="text-center"><a href="{{ route('rotas.index','valencias') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Valências</a></li>
                    <hr class="bg-[#68c8e3]">
                    <li class="text-center"><a href="{{ route('rotas.index','documentacao') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Documentação</a></li>
                    <hr class="bg-[#68c8e3]">
                    <li class="text-center"><a href="{{ route('rotas.index','projetos') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Projetos</a></li>
                    <hr class="bg-[#68c8e3]">
                    <li class="text-center"><a href="{{ route('rotas.index','contatos') }}" class="loading-link text-black/60 transition duration-200 hover:text-black/80 focus:text-black/80 dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80">Contatos</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <h2 class="text-xl font-bold mb-4">Dias e horarios de funcionamento</h2>
                <hr class="bg-[#68c8e3]">
                <ul class="text-left">
                    <li><strong>Segunda a sexta:</strong> 09:00 - 13:00/ 15:00 - 18:00</li>
                    <hr class="bg-[#68c8e3]">
                    <li><strong>Sabados:</strong> 11:00 - 13:00/ 15:00 - 16:00</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <h2 class="text-xl font-bold mb-4">Contatos</h2>
                <hr class="bg-[#68c8e3]">
                <ul class="text-left">
                    <li><strong>Endereço:</strong> Rua Quinta das Acácias, Ferreira do Zêzere</li>
                    <hr class="bg-[#68c8e3]">
                    <li><strong>Telefone:</strong> (+351) 249 360 190</li>
                    <hr class="bg-[#68c8e3]">
                    <li><strong>Email:</strong> scmfz@hotmail.com</li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-8">
            &copy; {{ date('Y') }} Santa Casa. Todos os direitos reservados.
        </div>
    </div>
</footer>



    <script>
        document.getElementById('menu-button').onclick = function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        };
        // Função para alternar entre modo claro e escuro
        function toggleDarkMode() {
            var body = document.body;
            body.classList.toggle('dark');

            var modeIcon = document.getElementById('mode-icon');
            var modeText = document.getElementById('mode-text');

            if (body.classList.contains('dark')) {
                modeIcon.classList.remove('text-yellow-500');
                modeIcon.classList.add('text-white');
                modeIcon.innerHTML = '<path fill-rule="evenodd" d="M16.707 3.293a1 1 0 010 1.414l-12 12a1 1 0 01-1.414-1.414l12-12a1 1 0 011.414 0zM10 19a1 1 0 110-2 7 7 0 110-14 1 1 0 112 0 9 9 0 100 18z" clip-rule="evenodd"/>';
                modeText.textContent = 'Modo Escuro';
            } else {
                modeIcon.classList.remove('text-white');
                modeIcon.classList.add('text-yellow-500');
                modeIcon.innerHTML = '<path fill-rule="evenodd" d="M10 2a1 1 0 011 1v2a1 1 0 11-2 0V3a1 1 0 011-1zM5.293 5.293a1 1 0 011.414 0l1.414 1.414a1 1 0 11-1.414 1.414L5.293 6.707a1 1 0 010-1.414zM3 10a1 1 0 011-1h2a1 1 0 110 2H4a1 1 0 01-1-1zm11.364-5.364a1 1 0 011.414 1.414l-1.414 1.414a1 1 0 11-1.414-1.414l1.414-1.414zM12 18a1 1 0 01-1-1v-2a1 1 0 112 0v2a1 1 0 01-1 1zm3.707-3.707a1 1 0 010 1.414l-1.414 1.414a1 1 0 11-1.414-1.414l1.414-1.414a1 1 0 011.414 0zM10 13a1 1 0 100 2v-2zm5-1a1 1 0 11-2 0 1 1 0 012 0zM4 11a1 1 0 110-2h2a1 1 0 110 2H4zm11.364 5.364l-1.414-1.414a1 1 0 111.414-1.414l1.414 1.414a1 1 0 11-1.414 1.414zM18 10a1 1 0 100-2h-2a1 1 0 100 2h2z" clip-rule="evenodd"/>';
                modeText.textContent = 'Modo Claro';
            }

            // Salva a preferência do usuário no LocalStorage
            var darkModeEnabled = body.classList.contains('dark');
            localStorage.setItem('darkMode', darkModeEnabled);
        }

        // Verifica a preferência do usuário ao carregar a página
        window.onload = function() {
            var darkModeEnabled = localStorage.getItem('darkMode') === 'true';
            if (darkModeEnabled) {
                document.body.classList.add('dark');
            }
        };
        // Function to show loading overlay
function showLoading() {
    document.getElementById('loading-overlay').classList.remove('hidden');
}

        // Add event listeners to all links with the "loading-link" class
        document.querySelectorAll('.loading-link').forEach(link => {
            link.addEventListener('click', function(event) {
                // Prevent the default link behavior (i.e., navigating to the href)
                event.preventDefault();
                // Show the loading overlay
                showLoading();
                // Get the href attribute of the clicked link
                const href = this.getAttribute('href');
                // Redirect the user to the href after a short delay (e.g., 1 second)
                setTimeout(function() {
                    window.location.href = href;
                }, 1000); // Adjust the delay as needed
            });
        });

    </script>
</body>
</html>
