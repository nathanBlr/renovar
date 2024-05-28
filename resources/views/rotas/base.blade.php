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
    <style>
                /* Dark Mode Classes */
        .dark .bg-white {
            background-color: #1f2937;
            color: #f3f4f6;
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


    </style>

</head>
<body class="bg-[#68c8e3] text-gray-800 ">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto flex justify-between items-center p-6">
            <div class="flex items-center">
                <img src="{{ asset('logo.webp') }}" alt="Santa Casa" class="h-12 mr-3">
                <span class=" font-fredericka text-2xl">Santa Casa</span>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('rotas.index', 'inicio') }}" class="hover:text-blue-500">Início</a>
                <a href="{{ route('rotas.index', 'historia') }}" class="hover:text-blue-500">História</a>
                <a href="{{ route('rotas.index', 'noticias') }}" class="hover:text-blue-500">Notícias</a>
                <a href="{{ route('rotas.index', 'valencias') }}" class="hover:text-blue-500">Valências</a>
                <a href="{{ route('rotas.index', 'documentacao') }}" class="hover:text-blue-500">Documentação</a>
                <a href="{{ route('rotas.index', 'galeria' )}}" class="hover:text-blue-500">Galeria</a>
                <a href="{{ route('rotas.index', 'projetos') }}" class="hover:text-blue-500">Projetos</a>
                <a href="{{ route('rotas.index', 'contatos' )}}" class="hover:text-blue-500">Contatos</a>
                <!--
                <button onclick="toggleDarkMode()" class="flex items-center space-x-1 bg-transparent text-gray-800 focus:outline-none">
                    <svg id="mode-icon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v2a1 1 0 11-2 0V3a1 1 0 011-1zM5.293 5.293a1 1 0 011.414 0l1.414 1.414a1 1 0 11-1.414 1.414L5.293 6.707a1 1 0 010-1.414zM3 10a1 1 0 011-1h2a1 1 0 110 2H4a1 1 0 01-1-1zm11.364-5.364a1 1 0 011.414 1.414l-1.414 1.414a1 1 0 11-1.414-1.414l1.414-1.414zM12 18a1 1 0 01-1-1v-2a1 1 0 112 0v2a1 1 0 01-1 1zm3.707-3.707a1 1 0 010 1.414l-1.414 1.414a1 1 0 11-1.414-1.414l1.414-1.414a1 1 0 011.414 0zM10 13a1 1 0 100 2v-2zm5-1a1 1 0 11-2 0 1 1 0 012 0zM4 11a1 1 0 110-2h2a1 1 0 110 2H4zm11.364 5.364l-1.414-1.414a1 1 0 111.414-1.414l1.414 1.414a1 1 0 11-1.414 1.414zM18 10a1 1 0 100-2h-2a1 1 0 100 2h2z" clip-rule="evenodd"/>
                    </svg>
                    <span id="mode-text">Modo Claro</span>
                </button>-->
                
                

            </div>
            <div class="md:hidden">
                <button id="menu-button" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>
        <div id="mobile-menu" class="hidden md:hidden">
            <a href="{{ route('rotas.index', 'inicio') }}" class="block px-4 py-2 text-sm">Início</a>
            <a href="{{ route('rotas.index', 'historia') }}" class="block px-4 py-2 text-sm">História</a>
            <a href="{{ route('rotas.index', 'noticias') }}" class="block px-4 py-2 text-sm">Notícias</a>
            <a href="{{ route('rotas.index', 'valencias') }}" class="block px-4 py-2 text-sm">Valências</a>
            <a href="{{ route('rotas.index', 'documentacao') }}" class="block px-4 py-2 text-sm">Documentação</a>
            <a href="{{ route('rotas.index', 'galeria' )}}" class="block px-4 py-2 text-sm">Galeria</a>
            <a href="{{ route('rotas.index', 'projetos') }}" class="block px-4 py-2 text-sm">Projetos</a>
            <a href="{{ route('rotas.index', 'contatos' )}}" class="block px-4 py-2 text-sm">Contatos</a>
        </div>
    </header>

    <main class="container mx-auto py-6">
        @yield('content')
    </main>

    <footer class="bg-gray-200 mt-10 py-6">
        <div class="container mx-auto text-center">
            <div class="flex justify-center space-x-6 mb-4">
                <a href="#" class="hover:text-blue-500">Facebook</a>
                <a href="#" class="hover:text-blue-500">Twitter</a>
                <a href="#" class="hover:text-blue-500">Instagram</a>
                <a href="#" class="hover:text-blue-500">LinkedIn</a>
            </div>
            <div>
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

    </script>
</body>
</html>
