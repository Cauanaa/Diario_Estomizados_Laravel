@extends('base.app')

@section('titulo', 'App')

@section('content')

<div style="background-color: #F2D1F5; align-items: center; padding: 15px 30px; width: 100%">
  <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dicas')">
    <img style="width: 6em; display: inline-block;" 
      src="../../imagens/gota-sangue.png" alt="imagem">
    </x-responsive-nav-link>

    <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
      Artigo 2 - Alimentação
    </p>
  </div>

  <div style="width:100%; margin-top: 10px; margin-bottom: 40px; flex: 1; justify-content:space-between; flex-direction: column; align-items: center">
    <p style="align-self: center; font-weight: bold; font-size: 18px; padding:10px 50px">
        Alimentação
    </p>
    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Cuidados com a alimentação pré e pós-cirurgia.
    </p>
    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    Tanto antes quanto depois do procedimento cirúrgico, é importante adotar uma abordagem 
    cuidadosa em relação à dieta, visando fornecer os nutrientes necessários, promover a 
    cicatrização adequada e minimizar possíveis complicações.
    </p>

    <img style="width: 25em; padding: 10px 50px; display: inline-block;" 
      src="../../imagens/imagem_alimentacao.png" alt="imagem">

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        O que comer antes da cirurgia?
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    • Priorize uma variedade de frutas e vegetais em sua alimentação; <br>
    • Opte por refeições menores contendo carboidratos ricos em amido, como batata, pão e arroz;<br>
    • Inclua laticínios ou alternativas lácteas, como bebidas de soja, em sua dieta;<br>
    • Obtenha proteínas de fontes como peixes, ovos, carnes ou feijão e leguminosas;<br>
    • Escolha gorduras não saturadas e consuma em quantidades moderadas;<br>
    • Mantenha-se hidratado, bebendo de 6 a 8 copos de líquidos por dia;<br>
    • Reduza o consumo de alimentos e bebidas com alto teor de gordura, açúcar ou sal.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        O que comer depois da cirurgia?
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    Logo após a cirurgia, é comum haver um inchaço na região ao redor da estomia, o que pode dificultar 
    a passagem de certos alimentos, especialmente os ricos em fibras. Nos primeiros dias após a operação,
     é aconselhável adotar uma abordagem de refeições menores e mais frequentes, a fim de evitar bloqueios
      que podem ser dolorosos e desconfortáveis. É recomendado começar com alimentos pastosos, como sopas 
      fortificadas, mingaus, arroz doce, iogurte e vitaminas.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    Enquanto o inchaço e o desconforto ao redor da estomia não desaparecerem, é aconselhável seguir uma
     dieta leve. Isso significa limitar a ingestão de grandes quantidades de alimentos ricos em proteínas, 
     frutas e vegetais com baixo teor de fibras, além de optar por massas não integrais e pão branco.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    Como resultado, a função do cólon ou do íleo é interrompida na passagem das fezes ou do conteúdo 
    intestinal. Além disso, a absorção de água e nutrientes pode ser afetada, já que o tempo de contato
     entre os alimentos e o intestino é reduzido.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Como voltar com a alimentação normal?
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Quando a área ao redor da estomia externa começa a cicatrizar e ficar menos dolorida, 
        isso indica que o interior também está começando a se recuperar. Nesse momento, você pode 
        gradualmente reintroduzir alguns alimentos essenciais para uma dieta equilibrada. No entanto, 
        é importante fazer isso gradualmente, a fim de evitar complicações, especialmente ao adicionar
         alimentos mais pesados, como vegetais ricos em fibras e nozes. Além disso, lembre-se de manter-se
          hidratado, pois a ingestão adequada de líquidos ajudará no movimento dos alimentos pelo intestino.
    </p>
  </div>

@endsection