@extends('base.app')

@section('titulo', 'App')

@section('content')

<div style="background-color: #F2D1F5; align-items: center; padding: 15px 30px; width: 100%">
  <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dicas')">
    <img style="width: 6em; display: inline-block;" 
      src="../../imagens/gota-sangue.png" alt="imagem">
    </x-responsive-nav-link>

    <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
      Artigo 5 - Psicológico
    </p>
  </div>

  <div style="width:100%; margin-top: 10px; margin-bottom: 40px; flex: 1; justify-content:space-between; flex-direction: column; align-items: center">
    <p style="align-self: center; font-weight: bold; font-size: 18px; padding:10px 50px">
        Psicológico
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Aceitando as mudanças
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Aqui estão algumas orientações e estratégias para lidar com os obstáculos e as frustrações 
        que surgem ao conviver com uma estomia. Enfrentar as mudanças após a cirurgia de estomia 
        pode ser uma jornada repleta de altos e baixos. Não existe uma solução mágica, mas com o tempo, 
        você encontrará um equilíbrio e a felicidade em sua vida, assim como outros que enfrentaram 
        desafios semelhantes.

    </p>

    <img style="width: 25em; padding: 10px 50px; display: inline-block;" 
      src="../../imagens/imagem_mudanca.jpg" alt="imagem">

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Quando a frustração se instala
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Inicialmente, é natural que você estivesse preocupado(a) com todas as habilidades 
        práticas que precisava aprender. Talvez tenha sentido alívio no começo, já que a cirurgia 
        fazia parte do tratamento para uma doença ou, pelo menos, para superar diversas dificuldades. 
        Contudo, ao retornar à vida cotidiana, é possível que sentimentos de confusão e frustração 
        comecem a surgir. Embora não haja uma solução universal para lidar com esses sentimentos, 
        existem algumas coisas que você pode fazer para recuperar o equilíbrio em sua vida.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Assuma o controle
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Não é raro sentir uma perda de controle em relação à sua situação. Se esse for o caso, 
        é importante que você participe ativamente de todas as decisões relacionadas à sua estomia, 
        desde a escolha dos produtos adequados até a definição dos seus próprios limites. Isso lhe 
        proporcionará uma sensação maior de controle e, sem dúvida, fortalecerá sua confiança.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Você ainda é a mesma pessoa
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Também é perfeitamente normal sentir uma certa perda de identidade, como se de alguma forma 
        você se tornasse alguém diferente após a cirurgia. Nesse sentido, é importante continuar 
        realizando as atividades que você costumava fazer e apreciava antes. Não para ficar preso(a) 
        na nostalgia da vida pré-cirurgia, mas sim para se lembrar de todas as experiências positivas 
        que ainda pode desfrutar.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Faça uma lista de todas as coisas que você costumava fazer e gostava antes, e assegure-se 
        de continuar praticando pelo menos algumas delas regularmente. E lembre-se: apenas as 
        circunstâncias físicas mudaram, não quem você é como pessoa.
    </p>
  </div>

@endsection