@extends('rotas.base')

@section('title', 'Contatos')

@section('content')
    <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center font-fredericka pt-4">Contatos</h1>
    <div class="p-6 rounded shadow-md">
        <div class="mt-4 flex flex-col  items-center border-red-700">
            
            <!-- Div para informações -->
            <div class="w-full md:w-1/2 lg:w-1/3 p-4 border bg-gray-300">
                <h2 class="text-xl font-bold mb-4 text-center">Informações de Contato</h2>
                <p class="text-[verdana]">Aqui você pode adicionar informações de contato, como endereço, número de telefone, e-mail, etc.</p>
            </div>
        </div>
        
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/2 lg:w-1/3 p-4 border bg-gray-300">
                <!-- Seu formulário aqui -->
                <a class="block max-w-sm p-6 mx-auto bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <hr>
                    <h3 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Morada</h3>
                    <hr>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="48" height="48" viewBox="0 0 256 256" xml:space="preserve">
                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <rect x="54.14" y="52.16" rx="0" ry="0" width="35.86" height="33.57" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(21,155,225); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <path d="M 0 75.905 c 0 5.425 5.293 9.824 11.822 9.824 h 37.696 v -34.09 H 11.822 L 0 66.028 V 75.905 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(14,171,97); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <polygon points="26.6,21.64 90,21.64 90,46.44 51.7,46.44 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(14,171,97); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            <polygon points="20.93,21.64 46.46,47.17 8.75,47.17 8.75,21.64 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(14,171,97); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            <rect x="29.8" y="53.68" rx="0" ry="0" width="17.67" height="9.55" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(93,201,131); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <polygon points="69.26,45.39 53.32,45.39 29.28,21.64 17.48,21.64 41.52,45.39 8.75,45.39 8.75,53.68 47.47,53.68 47.47,85.73 55.77,85.73 55.77,53.68 90,53.68 90,45.39 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(254,217,65); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            <path d="M 61.574 38.736 c 5.838 -7.141 11.675 -16.341 11.675 -22.789 S 68.022 4.271 61.574 4.271 S 49.898 9.499 49.898 15.947 S 55.736 31.595 61.574 38.736 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(203,0,16); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <circle cx="61.571" cy="16.341" r="4.401" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            <path d="M 0 75.905 c 0 -5.425 5.293 -9.824 11.822 -9.824 V 23.965 V 4.318 C 5.293 4.318 0 8.716 0 14.142 v 0 V 75.905" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(187,245,208); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                        </svg>
                    
                    <p class="font-normal text-gray-700 dark:text-gray-400">Rua Quinta das Acácias</p>
                    <hr>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="48" height="48" viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <rect x="58.36" y="26.28" rx="0" ry="0" width="15.89" height="48.2" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(232,234,234); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="15.75" y="26.28" rx="0" ry="0" width="16.86" height="48.2" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(232,234,234); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="28.89" y="15.52" rx="0" ry="0" width="32.23" height="58.96" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(242,242,242); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="81.25" y="65.19" rx="0" ry="0" width="2" height="9.17" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(204,102,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="6.75" y="65.19" rx="0" ry="0" width="2" height="9.17" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(204,102,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <path d="M 7.748 67.195 L 7.748 67.195 c -1.626 0 -2.957 -1.33 -2.957 -2.957 V 51.826 c 0 -1.626 1.33 -2.957 2.957 -2.957 h 0 c 1.626 0 2.957 1.33 2.957 2.957 v 12.413 C 10.705 65.865 9.374 67.195 7.748 67.195 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(131,206,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 82.252 67.195 L 82.252 67.195 c -1.626 0 -2.957 -1.33 -2.957 -2.957 V 51.826 c 0 -1.626 1.33 -2.957 2.957 -2.957 h 0 c 1.626 0 2.957 1.33 2.957 2.957 v 12.413 C 85.208 65.865 83.878 67.195 82.252 67.195 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(131,206,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <rect x="0" y="73.48" rx="0" ry="0" width="90" height="2" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(242,242,242); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="66.68" y="31.28" rx="0" ry="0" width="2" height="35.59" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="21.32" y="31.28" rx="0" ry="0" width="2" height="35.59" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="50.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="50.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="50.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="55.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="55.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="55.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="60.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="60.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="60.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="65.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="65.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="65.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="30.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="30.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="30.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="35.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="35.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="35.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="40.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="40.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="40.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="45.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="45.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="45.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="20.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="20.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="20.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="35.5" y="25.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="43.5" y="25.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="51.5" y="25.99" rx="0" ry="0" width="3" height="1.76" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(117,141,158); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <rect x="27.39" y="12.52" rx="0" ry="0" width="35.22" height="5.47" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,112,88); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                        </g>
                        </svg>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Ferreira do Zêzere</p>
                    <hr>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="48" height="48" viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <line x1="0" y1="-23.963500000000003" x2="0" y2="23.963500000000003" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                            <path d="M 45 90 c -0.558 0 -1.011 -0.452 -1.011 -1.011 V 41.062 c 0 -0.558 0.453 -1.011 1.011 -1.011 s 1.011 0.453 1.011 1.011 v 47.927 C 46.011 89.548 45.558 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(102,103,107); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <circle cx="45.001" cy="20.531" r="20.531" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(242,63,56); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            <circle cx="52.076" cy="13.456" r="5.056" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,158,154); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                        </g>
                        </svg>
                    <p class="font-normal text-gray-700 dark:text-gray-400">2240-367</p>
                    <hr>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 p-4 border bg-gray-300">
                <form class="max-w-sm mx-auto">
                    <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome Completo:</label>
                    <input type="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Yuri Gagarin" required />
                    </div>
                    <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail:</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jones@gmail.com" required />
                    </div>
                    <div class="mb-5">
                    <label for="assunto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assunto:</label>
                    <input type="passunto" id="assunto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="mb-5">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mensagem:</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit" class="text-white bg-[#68c8e3] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-[#68c8e3] dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 p-4 border bg-gray-300 flex justify-between">
                <a class="block max-w-sm p-6 mx-auto bg-white border  border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <hr>
                    <h3 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        E-mail
                    </h3>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="48" height="48" viewBox="0 0 256 256" xml:space="preserve">
                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <path d="M 80.89 78.772 H 9.11 c -5.023 0 -9.11 -4.087 -9.11 -9.11 V 20.338 c 0 -5.023 4.087 -9.11 9.11 -9.11 h 71.78 c 5.023 0 9.11 4.087 9.11 9.11 v 49.324 C 90 74.686 85.913 78.772 80.89 78.772 z M 9.11 17.228 c -1.715 0 -3.11 1.396 -3.11 3.11 v 49.324 c 0 1.715 1.395 3.11 3.11 3.11 h 71.78 c 1.715 0 3.11 -1.396 3.11 -3.11 V 20.338 c 0 -1.715 -1.396 -3.11 -3.11 -3.11 H 9.11 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 45 55.427 c -5.408 0 -10.599 -2.292 -14.242 -6.288 L 2.493 18.125 l 4.435 -4.042 l 28.265 31.013 c 2.545 2.792 6.028 4.331 9.807 4.331 c 3.779 0 7.262 -1.538 9.808 -4.331 l 28.266 -31.013 l 4.434 4.042 L 59.241 49.138 C 55.599 53.135 50.408 55.427 45 55.427 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <rect x="-0.96" y="57.16" rx="0" ry="0" width="38.98" height="6" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(0.7053 -0.7089 0.7089 0.7053 -37.1881 30.8639) "/>
                            <rect x="68.47" y="40.67" rx="0" ry="0" width="6" height="38.98" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(0.709 -0.7053 0.7053 0.709 -21.628 67.9146) "/>
                        </g>
                    </svg>
                    <h5 class="text-3x1">
                        scmfz@hotmail.com
                    </h5>
                    <hr>
                    <h3 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Telefone
                    </h3>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="48" height="48" viewBox="0 0 256 256" xml:space="preserve">
                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <path d="M 38.789 51.211 l 10.876 10.876 c 0.974 0.974 2.471 1.194 3.684 0.543 l 13.034 -6.997 c 0.964 -0.518 2.129 -0.493 3.07 0.066 l 19.017 11.285 c 1.357 0.805 1.903 2.489 1.268 3.933 c -1.625 3.698 -4.583 10.476 -5.758 13.473 c -0.247 0.631 -0.615 1.209 -1.127 1.652 c -12.674 10.986 -37.89 -2.4 -57.191 -21.701 C 6.358 45.039 -7.028 19.823 3.958 7.149 c 0.444 -0.512 1.022 -0.88 1.652 -1.127 c 2.996 -1.175 9.775 -4.133 13.473 -5.758 c 1.444 -0.635 3.128 -0.089 3.933 1.268 l 11.285 19.017 c 0.558 0.941 0.583 2.106 0.066 3.07 L 27.37 36.651 c -0.651 1.213 -0.431 2.71 0.543 3.684 C 27.913 40.335 38.789 51.211 38.789 51.211 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                        </svg>
                        <h5 class="text-3x1">
                            249 360 190
                        </h5>
                        <hr>
                        <h3 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Horário de Funcionamento
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="48" height="48" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 70.794 42 H 48 V 19.206 c 0 -1.657 -1.343 -3 -3 -3 c -1.657 0 -3 1.343 -3 3 V 45 c 0 1.657 1.343 3 3 3 h 25.794 c 1.657 0 3 -1.343 3 -3 C 73.794 43.343 72.451 42 70.794 42 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                            </svg>
                            <h5 class="text-3x1">
                                9.30h-12.30h e 14.30h – 18.00h
                            </h5>
                            <hr>
                            
                </a>
            </div>
        </div>
    </div>
@endsection

<div>
    <div class="et_pb_text_inner"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.888242858937!2d-8.292868091998814!3d39.68791892366686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd229d5eb9a065d7%3A0xb8b67318c1e597fd!2sSanta%20Casa%20da%20Miseric%C3%B3rdia%20de%20Ferreira%20do%20Z%C3%AAzere!5e1!3m2!1sen!2spt!4v1717511021577!5m2!1sen!2spt" width="100%" height="70%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>

    
    
    
    
