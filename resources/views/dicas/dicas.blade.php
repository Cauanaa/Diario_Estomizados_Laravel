@extends('base.app')

@section('titulo', 'App')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div style="background-color: #F2D1F5; align-items: center; padding: 15px 30px; width: 100%">
  <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
    <img style="width: 6em; display: inline-block;" 
      src="../../imagens/gota-sangue.png" alt="imagem">
    </x-responsive-nav-link>

    <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
      Confira nossas dicas para a sua saúde!
    </p>
  </div>

  <div style="width:100%; margin-top: 10px" class="row d-flex justify-content-center">
        <div class="card col-4 p-3 d-flex justify-content-center" style="width:350px; border: 0px;">
            <img src="../../imagens/sistemas.jpg" class="card-img-top">
            <x-responsive-nav-link :href="route('artigo1')" :active="request()->routeIs('artigo1')">
                <button style="padding: 10px 15px; 
                text-align: center; 
                font-size: 15px;
                background-color: #D5F6E6; 
                justify-content: center;
                width: 100%;  
                height: 70px;
                border-radius: 0px 0px 10px 10px">
                <h6 style="font-weight: bold;color: white; text-decoration: none; font-size: 15px, margin-top: 1rem">Sistemas digestório e urinário</h6>
                </button>
            </x-responsive-nav-link> 
        </div>
    
        <div class="card col-4 p-3 d-flex justify-content-center" style="width:350px; border: 0px;">
            <img src="../../imagens/alimentacao.jpg" class="card-img-top">
            <x-responsive-nav-link :href="route('artigo2')" :active="request()->routeIs('artigo2')">
                <button style="padding: 10px 15px; 
                text-align: center; 
                font-size: 15px;
                background-color: #C770D1; 
                justify-content: center;
                width: 100%;  
                height: 70px;
                border-radius: 0px 0px 10px 10px">
                <h6 style="font-weight: bold;color: white; text-decoration: none; font-size: 15px, margin-top: 1rem">Alimentação</h6>
                </button>
            </x-responsive-nav-link> 
        </div>
    
        <div class="card col-4 p-3 d-flex justify-content-center" style="width:350px; border: 0px;">
            <img src="../../imagens/atividades.jpg" class="card-img-top">
            <x-responsive-nav-link :href="route('artigo3')" :active="request()->routeIs('artigo3')">
                <button style=" 
                text-align: center; 
                font-size: 15px;
                background-color: #D5F6E6; 
                justify-content: center;
                width: 100%; 
                height: 70px;
                border-radius: 0px 0px 10px 10px">
                <h6 style="font-weight: bold;color: white; text-decoration: none; font-size: 15px, margin-top: 1rem">Atividades Físicas</h6>
                </button>
            </x-responsive-nav-link> 
        </div>
        <div class="card col-6 p-3 d-flex justify-content-center" style="width:350px; border: 0px;">
            <img src="../../imagens/rotina.jpg" class="card-img-top">
            <x-responsive-nav-link :href="route('artigo4')" :active="request()->routeIs('artigo4')">
                <button style="padding: 10px 15px; 
                text-align: center; 
                font-size: 15px;
                background-color: #C770D1; 
                justify-content: center;
                width: 100%;  
                height: 70px;
                border-radius: 0px 0px 10px 10px">
                <h6 style="font-weight: bold;color: white; text-decoration: none; font-size: 15px, margin-top: 1rem">Rotina</h6>
                </button>
            </x-responsive-nav-link> 
        </div>
        <div class="card col-6 p-3 d-flex justify-content-center" style="width:350px; border: 0px;">
            <img src="../../imagens/psicologico.jpg" class="card-img-top">
            <x-responsive-nav-link :href="route('artigo5')" :active="request()->routeIs('artigo5')">
                <button style=" 
                text-align: center; 
                font-size: 15px;
                background-color: #D5F6E6; 
                justify-content: center;
                width: 100%; 
                height: 70px;
                border-radius: 0px 0px 10px 10px">
                <h6 style="font-weight: bold;color: white; text-decoration: none; font-size: 15px, margin-top: 1rem">Psicológico</h6>
                </button>
            </x-responsive-nav-link> 
        </div>
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection