@extends('base.app')

@section('titulo', 'App')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div style="background-color: #F2D1F5; display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding: 15px 30px; width: 100%">
  <div>
    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
      <img style="width: 6em; display: inline-block;" 
          src="../../imagens/gota-sangue.png" alt="imagem">
    </x-responsive-nav-link>

    <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
      Oi  
    <span style="color: #7E3586; text-transform: uppercase">{{ Auth::user()->name }}</span>! 
      Como você está?
    </p>
  </div>
<div> 

    <div class="dropdown">
    <button style="padding: 10px 30px; 
          text-align: center; 
          display: inline-block; 
          font-size: 15px; margin-bottom: 13px; 
          background-color: #C770D1; 
          width: 150px;  
          color: white;
          font-weight: bold;
          border-radius: 10px;
          margin-right: 5px"
          type="button" data-toggle="dropdown">Menu
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="{{ route('status.index') }}">Status</a></li>
      <li><a href="{{ route('clinica.index') }}">Clinicas</a></li>
      <li><a href="{{ route('dicas') }}">Dicas</a></li>
      <form method="POST" action="{{ route('logout') }}">
          @csrf                       
      <li><a href="route('logout')" style="color: #C770D1; margin-left: 20px" onclick="event.preventDefault(); this.closest('form').submit();"> Sair</a></li>
      </form>
    </ul>
  </div>
  </div>
</div>

<div style="width: 100%; align-items: center; justify-content: center; margin-top: 3em">
    <div style="background-color: #F2D1F5; width: 40%; margin: 0 auto;align-items: center; border-radius: 20px">
        <div style="background-color: #C770D1; width: 100%; padding: 100px, align-items: center; border-top-left-radius: 20px; border-top-right-radius: 20px;">
            <p style="font-weight: bold; align-self: center; text-align: center; font-size: 16px; padding: 5%">
                Como está a sua energia?
            </p>
        </div>
        <p style="color:grey; align-self: center; text-align: center; font-size: 16px; padding: 20px">
            Cadastre seus dados, agende consultas, acompanhe seu estoma e veja a análise dos resultados! 
        </p>
        <img style="width: 10em; margin: 0 auto;" 
            src="../../imagens/imagem_inicio_homem.png" alt="imagem">
        
    </div>
</div>
</body>
@endsection

