@extends('rotas.base')

@section('title', 'Valências')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center font-fredericka">Valências</h1>
    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1: Centros De Saude -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <img src="{{ asset('Fotos/fz-vicente-saude-0169990085_818233773257400062_n-780x470.jpg') }}" alt="Centros De Saude Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Centros De Saude</h2>
                <p class="text-base">Oferecemos atendimento médico de alta qualidade com equipes especializadas em diversas áreas da saúde.</p>
            </div>
        </div>
        <!-- Card 2: Assistência Social -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <img src="{{ asset('Fotos/assistsocial-min-1199x627-1.jpg') }}" alt="Assistência Social Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Assistência Social</h2>
                <p class="text-base">Proporcionamos um ambiente acolhedor e seguro para aqueles que necessitam de abrigo temporário.</p>
            </div>
        </div>
        <!-- Card 3: Assistência a Idosos -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <img src="{{ asset('Fotos/felicidade-alegre-mulher-idosa-e-homens-conversando-com-enfermeira-cuidadora-medica-tendo-consulta-de-verificacao-de-saude-na-area-de-estarcuidadores-com-casal-senior-sentado-na-sala-de-estar-do-lar-de-idosos_609648-3079.avif') }}" alt="Assistência a Idosos Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Assistência a Idosos</h2>
                <p class="text-base">Oferecemos programas educativos e de capacitação para ajudar indivíduos a construir um futuro melhor.</p>
            </div>
        </div>
        <!-- Botão de Contatos -->
        <div class="sm:col-span-2 lg:col-span-3 flex justify-center my-4">
            <a href="#footer" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Clique aqui para entrar em contato conosco, e participar de nossos projetos
            </a>
        </div>
        <!-- Card 4: Educação e Formação -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <img src="{{ asset('Fotos/escola.jpg') }}" alt="Educação e Formação Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Educação e Formação</h2>
                <p class="text-base">Oferecemos programas educativos e de capacitação para ajudar indivíduos a construir um futuro melhor.</p>
            </div>
        </div>
        <!-- Card 5: Cuidados Paliativos -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <img src="{{ asset('Fotos/shutterstock_1726021492.png') }}" alt="Cuidados Paliativos Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Cuidados Paliativos</h2>
                <p class="text-base">Proporcionamos cuidados especializados para pacientes com doenças graves, visando conforto e qualidade de vida.</p>
            </div>
        </div>
        <!-- Card 6: Saúde Mental -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <img src="{{ asset('Fotos/Saude-mental.jpg') }}" alt="Saúde Mental Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4"> 
                <h2 class="text-xl font-bold mb-2">Saúde Mental</h2>
                <p class="text-base">Oferecemos apoio psicológico e psiquiátrico para indivíduos que sofrem de distúrbios mentais e emocionais.</p>
            </div>
        </div>
    </div>
    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10"/>
    <!-- Seção Explicativa -->
    <div class="mt-12 bg-[#E5E7EB] p-6 rounded-lg shadow-md text-center">
        <div class="text-center">
            <h1 class="text-2xl font-bold mb-4">Valências da Santa Casa de Misericórdia</h1>
            <h2 class="text-lg font-medium mb-8">Serviços Essenciais para a Comunidade</h2>
        </div>
        <section class="mb-8">
        <ul class="list-disc list-inside">
            <li class="list-item mb-4">
                <span class="font-bold">Saúde:</span> 
                <p class="font-[verdana]">
                    Atendimento médico de alta qualidade, incluindo consultas médicas, exames diagnósticos e procedimentos ambulatoriais, com foco em diversas especialidades, como clínica geral, pediatria, ginecologia, cardiologia e ortopedia.
                </p>
                </li>
            <li class="list-item mb-4">
                <span class="font-bold">Assistência Social:</span> 
                <p class="font-[verdana]">
                Apoio psicossocial, orientação jurídica, encaminhamento para serviços especializados e concessão de benefícios para indivíduos e famílias em situação de vulnerabilidade social, como auxílio financeiro, cestas básicas e vestuário.
                </p>
            </li>
            <li class="list-item mb-4">
                <span class="font-bold">Assistência a Idosos:</span> 
                <p class="font-[verdana]">
                Cuidados especializados para pessoas da terceira idade, incluindo serviços de assistência domiciliar, atividades de lazer e integração social, além de lares de idosos para acolhimento de longa duração.
                </p>
            </li>
            <li class="list-item mb-4">
                <span class="font-bold">Educação e Formação:</span> 
                <p class="font-[verdana]">
                Programas educativos e de capacitação profissional para todas as idades, visando o desenvolvimento de habilidades e conhecimentos para o mercado de trabalho e a vida em comunidade, com cursos, oficinas e palestras.
                </p>
            </li>
            <li class="list-item mb-4">
                <span class="font-bold">Cuidados Paliativos:</span> 
                <p class="font-[verdana]">
                Suporte físico, emocional e espiritual para pacientes com doenças crônicas ou terminais, visando proporcionar conforto, dignidade e qualidade de vida na fase final da vida.
                </p>
            </li>
            <li class="list-item mb-4">
                <span class="font-bold">Saúde Mental:</span> 
                <p class="font-[verdana]">
                Avaliação, diagnóstico, tratamento e acompanhamento psicológico e psiquiátrico para pessoas de todas as idades, com foco na promoção da saúde mental e do bem-estar emocional.
                </p>
            </li>
        </ul>
        </section>
        <section>
            <h3 class="text-xl font-medium-bold mb-4">Missão e Valores</h3>
    
            <p class="text-base font-[verdana] mb-8">A Santa Casa de Misericórdia tem como missão prestar serviços essenciais à comunidade com excelência, compaixão e compromisso com o bem-estar do próximo. Acreditamos na dignidade humana, na justiça social e na promoção da cidadania, norteando nossas ações pelos valores da ética, da responsabilidade social, da transparência e do respeito à diversidade.</p>
        </section>
    </div>
    
</div>
@endsection
