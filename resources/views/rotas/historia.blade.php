@extends('rotas.base')

@section('title', 'História')

@section('content')
<div class="flex justify-center p-8">

    <div class="w-full max-w-4xl rounded-lg bg-[#E5E7EB] text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white">
      
      <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-center font-fredericka">Nossa História</h1>
      
      <div class="p-6">
        <p class="text-base font-[verdana]">
            Há muitos anos atrás, nas pitorescas margens do rio Zêzere, em Portugal, surgiu uma pequena comunidade que enfrentava grandes desafios. Os tempos eram difíceis, e a população local frequentemente sofria com doenças, fome e falta de cuidados adequados.
        </p>
        <div class="relative overflow-hidden bg-cover bg-no-repeat">
          <img class="mx-auto my-4 rounded-lg shadow-md" src="https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg" alt="Nature Image">
        </div>
        <p class="text-base font-[verdana]">
            Foi nesse cenário que um grupo de almas benevolentes se reuniu, lideradas pelo generoso padre Antônio Mendes, com um propósito nobre em mente: aliviar o sofrimento dos menos afortunados e cuidar dos necessitados da região. Assim, em uma tarde ensolarada de primavera, nasceu a Santa Casa da Misericórdia de Ferreira de Zêzere.
        </p>
        <div class="history-text font-[verdana]">
          <p>Desde o início, a missão da Santa Casa era clara: proporcionar cuidados de saúde, assistência social e apoio espiritual aos mais vulneráveis da comunidade. Com o apoio fervoroso dos habitantes locais e doações generosas de comerciantes e famílias abastadas da região, a instituição rapidamente cresceu em tamanho e influência.</p>
          <div class="history-image">
            <img src="{{ asset('Fotos/5237b1af.jpg') }}" alt="Historical Image 1" class="mx-auto my-4 rounded-lg shadow-md">
            <p class="text-center text-[#68c8e3] text-sm">Beira Rio</p>
          </div>
          <p>A Casa da Misericórdia logo se tornou o coração pulsante da cidade, oferecendo uma variedade de serviços essenciais. Um hospital modesto foi estabelecido, onde médicos dedicados e enfermeiras compassivas trabalhavam incansavelmente para curar os doentes e feridos. Um abrigo acolhedor foi criado para os desabrigados, oferecendo-lhes um refúgio seguro e uma refeição quente. Além disso, programas educacionais e de treinamento foram implementados para capacitar os necessitados e ajudá-los a construir um futuro melhor.</p>
          <div class="history-image">
            <img src="{{ asset('Fotos/vv_07_ferreirazezere_dornes.jpg') }}" alt="Historical Image 2" class="mx-auto my-4 rounded-lg shadow-md">
            <p class="text-center text-[#68c8e3] text-sm">Fachada Historica</p>
          </div>
          <p class="text-base font-[verdana]">
            Com o passar dos anos, a Santa Casa da Misericórdia de Ferreira de Zêzere continuou a evoluir e expandir suas operações. Novos serviços foram introduzidos para atender às crescentes demandas da comunidade, incluindo cuidados de saúde mental, assistência a idosos e apoio a famílias em dificuldades financeiras.
            </p>
            <p class="text-base font-[verdana]">
                No entanto, além de suas funções práticas, a Casa da Misericórdia sempre manteve suas ambições profundamente enraizadas em valores humanitários. O amor, a compaixão e a solidariedade guiavam cada ação tomada pela instituição, e seu impacto positivo era sentido não apenas em Ferreira de Zêzere, mas em toda a região circundante.
            </p>
          <p class="text-base font-[verdana]">Hoje, a Santa Casa da Misericórdia de Ferreira de Zêzere continua a ser um farol de esperança e bondade, um símbolo vivo do poder transformador do amor altruísta e da dedicação ao bem-estar dos outros. Sua história é um testemunho inspirador da capacidade do ser humano de fazer a diferença e criar um mundo melhor para todos.</p>
        </div>
      </div>
    </div>
  </div>
  
  

@endsection