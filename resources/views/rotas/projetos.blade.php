@extends('rotas.base')
@section('title', 'Projetos')
@section('pagina')
<div class="min-h-screen flex flex-col container mx-auto max-w-4xl py-8">
    <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 pointer-events-none cursor-default">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img class="w-48 h-48 rounded-full object-cover" src="{{ asset('Centro de Dia.webp') }}" alt="">
            </div>
            <div class="ml-4 flex flex-col justify-between leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">Centro de Convívio e ATL</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Em setembro de 2020 foi inaugurado o Centro de Convívio para idosos e ATL da Santa Casa da Misericórdia de Ferreira do Zêzere no edifício da antiga creche de Ferreira do Zêzere. Este edifício foi construído em 1954.
                    O edifício foi todo recuperado e funciona atualmente como um ATL (atividades de tempos livres) para crianças e servirá também como Centro de Convívio para os idosos da Santa Casa.
                    As obras custaram cerca de 300 mil euros, o Instituto Rainha D. Leonor presente da inauguração comparticipou com metade do valor e a Câmara Municipal de Ferreira do Zêzere com 25%.
                </p>
            </div>
        </div>
    </a>
</div>
@endsection
