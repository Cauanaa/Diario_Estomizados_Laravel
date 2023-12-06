@extends('base.app')

@section('titulo', 'App')

@section('content')

<div style="background-color: #F2D1F5; align-items: center; padding: 15px 30px; width: 100%">
  <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dicas')">
    <img style="width: 6em; display: inline-block;" 
      src="../../imagens/gota-sangue.png" alt="imagem">
    </x-responsive-nav-link>

    <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
      Artigo 4 - Rotina
    </p>
  </div>

  <div style="width:100%; margin-top: 10px; margin-bottom: 40px; flex: 1; justify-content:space-between; flex-direction: column; align-items: center">
    <p style="align-self: center; font-weight: bold; font-size: 18px; padding:10px 50px">
        Rotina
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        De volta a rotina
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Lidar com o retorno ao trabalho ou à escola após passar pela cirurgia de estomia pode ser 
        intimidante. É provável que você se sinta bastante exausto no início, portanto, comece de 
        forma gradual, retomando aos poucos as tarefas diárias, os passatempos e as atividades que 
        costumava realizar.
    </p>

    <img style="width: 25em; padding: 10px 50px; display: inline-block;" 
      src="../../imagens/imagem_rotina.png" alt="imagem">

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Voltando ao trabalho
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        A possibilidade de retornar ao trabalho após a cirurgia depende principalmente do tipo 
        de intervenção realizada e das orientações médicas. Caso tenha planos de voltar ao trabalho, 
        é fundamental discutir suas opções com o empregador o quanto antes. Alguns empregadores podem 
        oferecer a opção de trabalhar em horários reduzidos durante um período inicial, uma vez que 
        seu corpo ainda está se adaptando.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Voltando aos estudos
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        A mesma orientação pode ser aplicada caso você esteja apto(a) a retornar aos estudos. 
        É importante conversar com seu orientador(a) sobre a possibilidade de iniciar de forma 
        gradual, matriculando-se em apenas algumas disciplinas, até que se sinta preparado(a).
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Faça um teste
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Algumas semanas antes de retomar o trabalho ou os estudos, pode ser benéfico vestir-se e 
        planejar o seu dia como se estivesse indo para o trabalho ou para a escola - uma espécie 
        de simulação para estabelecer sua rotina. Leve em consideração as refeições e a frequência 
        com que precisa trocar ou esvaziar sua bolsa, e planeje seu dia de acordo com essas necessidades.

    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Para quem você deveria contar
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Ao retornar ao trabalho ou à escola, cabe a você decidir se deseja compartilhar detalhes 
        sobre o seu procedimento com as pessoas com as quais interage. No entanto, é recomendável 
        informar pelo menos uma pessoa. Caso ocorra uma emergência médica em algum momento, será mais 
        fácil lidar com a situação se alguém já estiver ciente da cirurgia.

    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Como explicar seu procedimento
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        É normal sentir preocupação ao ter que explicar o seu procedimento para pessoas novas. 
        A abordagem mais adequada é aquela que você se sentir mais confortável. Às vezes, ter uma 
        explicação breve e confiante pode ajudar a tranquilizar a sua mente. Por exemplo, você pode 
        simplesmente explicar de forma sucinta que passou por uma condição médica, o que exigiu uma 
        cirurgia e agora utiliza uma bolsa de estomia. Evite ser excessivamente técnico e esteja 
        aberto(a) a perguntas, sem precisar compartilhar detalhes excessivos. Lembre-se de que não é 
        necessário explicar todos os detalhes da sua cirurgia para todas as pessoas que o questionarem.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        O que fazer quando surgirem problemas fora de casa
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Como lidar com problemas quando você não está na comodidade do seu lar Se você planejar com 
        antecedência, trocar a bolsa não deverá apresentar mais desafios do que em casa. No entanto, 
        imprevistos podem ocorrer. Como você deve lidar com eles?
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Problemas com o seu dispositivo de estomia?
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Se você enfrentar algum problema com o seu produto, você pode entrar em contato com a nossa 
        equipe da Coloplast Ativa. Nossos especialistas possuem vasta experiência em lidar com diversas 
        situações diferentes e podem fornecer conselhos tranquilizadores para ajudá-lo.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Se ocorrer um vazamento 
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Não há como evitar: se ocorrer um vazamento em um ambiente público, é uma situação 
        inconveniente. Mas você pode reduzir um pouco o estresse da situação se preparando 
        antecipadamente: o que você dirá se a situação surgir? Saber como se expressar com um 
        garçom em um restaurante pode diminuir o pânico. Basta explicar que você teve uma 
        emergência médica e precisa de acesso ao banheiro, possivelmente de toalhas, sacolas 
        plásticas ou qualquer outro item necessário.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Não é necessário fornecer detalhes - na maioria dos casos, as palavras "emergência médica" são
         suficientes para obter a assistência imediata necessária. Ter um amigo ou parente de confiança,
        que esteja ciente da sua estomia, disponível para contato rápido pode ser extremamente útil caso
        algo inesperado aconteça.
    </p>

  </div>

@endsection