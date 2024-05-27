@extends('rotas.base')
@section('title', 'Valencias')
@section('pagina')

<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-md mx-auto text-center">
            <h1 class="text-3xl font-extrabold text-gray-900">Valencias</h1>
        </div>

        <div class="mt-8 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
            <!-- Card 1 -->
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <a href="#" class="flex-shrink-0">
                    <img class="h-48 w-full object-cover hover:size-full" src="{{ asset('creche.webp') }}" alt="">
                </a>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="#" class="block">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">Creche</h3>
                            <p class="mt-3 text-base leading-6 text-gray-500">Esta resposta social admite crianças de ambos os sexos, dos quatro meses aos vinte e quatro meses.</p>
                        </a>
                    </div>
                    <a href="{{ route('rotas.index', 'contatos') }}">
                    <div class="group [transform:translateZ(0)] px-6 py-3 rounded-lg bg-gray-200 overflow-hidden relative before:absolute before:bg-sky-600 before:bottom-0 before:left-0 before:h-full before:w-full before:-translate-x-full hover:before:translate-x-0 before:transition before:ease-in-out before:duration-500">
                        <span class="relative z-0 text-black group-hover:text-gray-200 transition ease-in-out duration-500">
                            Inscreva-se
                        </span>
                    </div>
                </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <a href="#" class="flex-shrink-0">
                    <img class="h-48 w-full object-cover hover:size-full" src="{{ asset('jardim.webp') }}" alt="">
                </a>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="#" class="block">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">JARDIM DE INFÂNCIA</h3>
                            <p class="mt-3 text-base leading-6 text-gray-500">
                                Esta resposta social admite crianças de ambos os sexos, de idades compreendidas entre os 3 anos de idade e a idade de ingresso no ensino básico,
                                 durante o período diário, correspondente ao trabalho dos pais</p>
                        </a>
                    </div>
                    <a href="{{ route('rotas.index', 'contatos') }}">
                        <div class="group [transform:translateZ(0)] px-6 py-3 rounded-lg bg-gray-200 overflow-hidden relative before:absolute before:bg-sky-600 before:bottom-0 before:left-0 before:h-full before:w-full before:-translate-x-full hover:before:translate-x-0 before:transition before:ease-in-out before:duration-500">
                            <span class="relative z-0 text-black group-hover:text-gray-200 transition ease-in-out duration-500">
                                Inscreva-se
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <a href="#" class="flex-shrink-0">
                    <img class="h-48 w-full object-cover hover:size-full" src="{{ asset('lar.webp') }}" alt="">
                </a>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="#" class="block">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">LAR S.MIGUEL</h3>
                            <p class="mt-3 text-base leading-6 text-gray-500">
                                O Lar de S. Miguel tem por fim acolher Pessoas Idosas em situação de maior risco de perda de autonomia,
                                 de ambos os sexos, especialmente as que têm domicílio no concelho de Ferreira do Zêzere e que se encontrem 
                                 impossibilitadas de se manter no seu meio familiar e social.
                            </p>
                        </a>
                    </div>
                    <a href="{{ route('rotas.index', 'contatos') }}">
                        <div class="group [transform:translateZ(0)] px-6 py-3 rounded-lg bg-gray-200 overflow-hidden relative before:absolute before:bg-sky-600 before:bottom-0 before:left-0 before:h-full before:w-full before:-translate-x-full hover:before:translate-x-0 before:transition before:ease-in-out before:duration-500">
                            <span class="relative z-0 text-black group-hover:text-gray-200 transition ease-in-out duration-500">
                                Inscreva-se
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <a href="#" class="flex-shrink-0">
                    <img class="h-48 w-full object-cover hover:size-full" src="{{ asset('Polo II.webp') }}" alt="">
                </a>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="#" class="block">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">LAR S.MIGUEL - POLO II</h3>
                            <p class="mt-3 text-base leading-6 text-gray-500">
                                O Lar de S. Miguel – Polo II tem por fim acolher Pessoas Idosas em situação de maior risco de perda de autonomia, de ambos os sexos,
                                 especialmente as que têm domicílio no concelho de Ferreira do Zêzere e que se encontrem impossibilitadas de se manter no seu meio familiar e social.
                            </p>
                        </a>
                    </div>
                    <a href="{{ route('rotas.index', 'contatos') }}">
                        <div class="group [transform:translateZ(0)] px-6 py-3 rounded-lg bg-gray-200 overflow-hidden relative before:absolute before:bg-sky-600 before:bottom-0 before:left-0 before:h-full before:w-full before:-translate-x-full hover:before:translate-x-0 before:transition before:ease-in-out before:duration-500">
                            <span class="relative z-0 text-black group-hover:text-gray-200 transition ease-in-out duration-500">
                                Inscreva-se
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <a href="#" class="flex-shrink-0">
                    <img class="h-48 w-full object-cover hover:size-full" src="{{ asset('Centro de Dia.webp') }}" alt="">
                </a>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="#" class="block">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">CENTRO DE DIA</h3>
                            <p class="mt-3 text-base leading-6 text-gray-500">
                                O Centro de Dia é uma resposta social, desenvolvida em equipamento,
                                que consiste num conjunto de serviços destinados a proporcionar ao indivíduo a sua manutenção no próprio meio familiar e social.
                            </p>
                        </a>
                    </div>
                    <a href="{{ route('rotas.index', 'contatos') }}">
                        <div class="group [transform:translateZ(0)] px-6 py-3 rounded-lg bg-gray-200 overflow-hidden relative before:absolute before:bg-sky-600 before:bottom-0 before:left-0 before:h-full before:w-full before:-translate-x-full hover:before:translate-x-0 before:transition before:ease-in-out before:duration-500">
                            <span class="relative z-0 text-black group-hover:text-gray-200 transition ease-in-out duration-500">
                                Inscreva-se
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <a href="#" class="flex-shrink-0">
                    <img class="h-48 w-full object-cover hover:size-full" src="{{ asset('Centro de Convivio.webp') }}" alt="">
                </a>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="#" class="block">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">CENTRO DE CONVÍVIO</h3>
                            <p class="mt-3 text-base leading-6 text-gray-500">
                                O Centro de Convívio é uma resposta social de apoio a atividades sócio recreativas e culturais,
                                 onde são proporcionados momentos de convívio e lazer.
                            </p>
                        </a>
                    </div>
                    <a href="{{ route('rotas.index', 'contatos') }}">
                        <div class="group [transform:translateZ(0)] px-6 py-3 rounded-lg bg-gray-200 overflow-hidden relative before:absolute before:bg-sky-600 before:bottom-0 before:left-0 before:h-full before:w-full before:-translate-x-full hover:before:translate-x-0 before:transition before:ease-in-out before:duration-500">
                            <span class="relative z-0 text-black group-hover:text-gray-200 transition ease-in-out duration-500">
                                Inscreva-se
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
