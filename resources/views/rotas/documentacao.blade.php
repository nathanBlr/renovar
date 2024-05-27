@extends('rotas.base')
@section('title', 'Documentação')
@section('pagina')
<div class="min-h-screen flex flex-col container mx-auto max-w-4xl py-8">  

    <div class="flex flex-wrap justify-between">

        <div class="w-full md:w-1/3 p-2">
            <div class="bg-white border text-blue-500 border-gray-200 rounded-lg shadow hover:scale-[1.15] hover:bg-blue-700 hover:border-blue-700 hover:text-white dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="{{ asset('Contas.webp') }}" alt="product image" />
                    <div class="px-5 pb-5">
                        <div class="flex items-center mt-2.5 mb-5">
                            <div class="flex items-center text-center mx-auto justify-between">
                                <span class="text-3xl font-bold dark:text-white">Contas</span>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="w-full md:w-1/3 p-2">
            <div class="bg-white border text-blue-500 border-gray-200 rounded-lg shadow hover:scale-[1.15] hover:bg-blue-700 hover:border-blue-700 hover:text-white dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="{{ asset('regulamentos.webp') }}" alt="product image" />
                    <div class="px-5 pb-5">
                        <div class="flex items-center mt-2.5 mb-5">
                            <div class="flex items-center text-center mx-auto justify-between">
                                <span class="text-3xl font-bold dark:text-white">Regulamentos</span>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="w-full md:w-1/3 p-2">
            <div class="bg-white border text-blue-500 border-gray-200 rounded-lg shadow hover:scale-[1.15] hover:bg-blue-700 hover:border-blue-700 hover:text-white dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="{{ asset('documents.webp') }}" alt="product image" />
                    <div class="px-5 pb-5">
                        <div class="flex items-center mt-2.5 mb-5">
                            <div class="flex items-center text-center mx-auto justify-between">
                                <span class="text-3xl font-bold dark:text-white">Documentos</span>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
