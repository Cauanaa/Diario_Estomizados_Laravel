@extends('base.app')

@section('titulo', 'Cadastro de Status')

@section('content')
    @php
        if (!empty($status->id)) {
            $route = route('status.update', $status->id);
        } else {
            $route = route('status.store');
        }
    @endphp

    <!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background-color: #F5F5F5">

    <div style="background-color: #F2D1F5; display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding: 15px 30px; width: 100%">
    <div>
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <img style="width: 6em; display: inline-block;" 
            src="../../imagens/gota-sangue.png" alt="imagem">
        </x-responsive-nav-link>

        <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
        Cadastro de Status
        </p>
    </div>
    </div>
   
    <div class="mx-auto py-12 divide-y md:max-w-4xl" style="align-items: center">
            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-12 mx-5 pt-6 pb-6 mb-4">
                @php
                $hoje = date('d/m/Y');
                @endphp

                <h3 class="pt-4 text-2xl font-medium"> Hoje: @php echo $hoje @endphp</h3>
                <p class="pt-4 text font-small"> Monitore seu status de hoje! </p>
               
                @csrf
                <!-- cria um hash de segurança -->

                @if (!empty($status->id))
                    @method('PUT')
                @endif

                @php
                  // dd($status); // é igual ao var_dump()
                  if (!empty($status->id)) {
                   $route = route('status.update', $status->id);
                  } else {
                   $route = route('status.store');
                  }
                @endphp

                                    <form action="{{ $route }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <!-- cria um hash de segurança -->

                                  @if (!empty($status->id))
                                      @method('PUT')
                                  @endif

                      <style>
                        .custom-modal-background {
                          background-color: #baf0d6;
                        }
                      </style>

                <input type="hidden" name="id"
                    value="@if (!empty($status->id)) {{ $status->id }}@elseif (!empty(old('id'))){{ old('id') }}@else{{ '' }} @endif">
                   
                <div class="container mt-5">
                <div class="row justify-content-center">
                <div class=" col text-center">

                    <!--modal1-->
                    <button style="padding: 10px; 
                    text-align: center; 
                    display: inline-block; 
                    font-size: 16px;
                    background-color: #8DE1B8; 
                    width: 70px;  
                    height: 80px;
                    border-radius: 15px;
                    border: 2px solid #8DE1B8;
                    font-size: 15px" 
                    type="button" 
                    data-bs-toggle="modal" 
                    data-bs-target="#Modal1">
                    <img style="width: 4em; display: inline-block;" 
                    src="../../imagens/digestao.png" alt="imagem">
                      </button>
                      <h6>Digestão</h6>

                      <!-- Modal -->
                      <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" style="margin-top: 100px; padding: 10px">
                        <div class="modal-dialog d-flex justify-content-center align-items-center">
                          <div class="modal-content custom-modal-background">
                            
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalLabel">Digestão</h5>
                            </div>
                            <div class="modal-body">

                              <!-- Conteúdo do modal -->
                              <p>Monitore sua digestão para obter melhores resultados.</p>

                                  @php
                                        // dd($status); // é igual ao var_dump()
                                        if (!empty($status->id)) {
                                            $route = route('status.update', $status->id);
                                        } else {
                                            $route = route('status.store');
                                        }
                                    @endphp

                                    <input type="hidden" name="status"
                                    value="@if (!empty($status->id)) {{ $status->id }}@elseif (!empty(old('id'))){{ old('id') }}@else{{ '' }} @endif">
                                           
                                    <input type="text" name="nome_digestao"
                                        style="height: 48px; border-radius: 5px; width:90%; overflow: hidden; "
                                        value="@if (!empty($status->nome_digestao)) {{ $status->nome_digestao }} @elseif (!empty(old('nome_digestao'))){{ old('nome_digestao') }}@else{{ '' }} @endif">
                                   
                                    <div class="container mt-4">
                                      <div class="row justify-content-center">
                                        <div class=" col text-center">
                                    
                                    <button type="button" style="padding: 15px; 
                                    text-align: center; 
                                    display: inline-block; 
                                    font-size: 16px;
                                    background-color: white; 
                                    width: 70px;  
                                    height: 80px;
                                    border-radius: 15px;
                                    border: 2px solid #C770D1;
                                    font-size: 15px"
                                    type="checkbox"
                                    disabled
                                    ><img style="width: 4em; display: inline-block;" 
                                      src="../../imagens/boa.png" alt="imagem">
                                    </button>
                                      <h6>Boa</h6>
                                        </div>
                                
                                <div class=" col text-center">
      
                                <button style="padding: 15px; 
                                text-align: center; 
                                display: inline-block; 
                                font-size: 16px;
                                background-color: white; 
                                width: 70px;  
                                height: 80px;
                                border-radius: 15px;
                                border: 2px solid #C770D1;
                                font-size: 15px" 
                                disabled
                                type="button">
                                <img style="width: 4em; display: inline-block;" 
                                src="../../imagens/razoavel.png" alt="imagem"></button>
                                  <h6>Razoável</h6>
                                </div>

                                <div class=" col text-center">
                                  <button style="padding: 15px; 
                                  text-align: center; 
                                  display: inline-block; 
                                  font-size: 16px;
                                  background-color: white; 
                                  width: 70px;  
                                  height: 80px;
                                  border-radius: 15px;
                                  border: 2px solid #C770D1;
                                  font-size: 15px"
                                  disabled 
                                  type="button"><img style="width: 4em; display: inline-block;" 
                                  src="../../imagens/ruim.png" alt="imagem">
                                    </button>
                                    <h6>Ruim</h6>
                                </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                
                    <div class="col text-center">
                      <!--modal2-->
                      <button style="padding: 10px; 
                      text-align: center; 
                      display: inline-block; 
                      font-size: 16px;
                      background-color: #8DE1B8; 
                      width: 70px;  
                      height: 80px;
                      border-radius: 15px;
                      border: 2px solid #8DE1B8;
                      font-size: 15px" 
                    type="button" 
                    data-bs-toggle="modal" 
                    data-bs-target="#Modal2">
                    <img style="width: 4em; display: inline-block;" 
                    src="../../imagens/exercicios.png" alt="imagem">
                        
                      </button>
                      <h6>Exercícios</h6>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" style="margin-top: 100px; padding: 10px">
                        <div class="modal-dialog d-flex justify-content-center align-items-center">
                          <div class="modal-content custom-modal-background">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalLabel">Exercícios</h5>
                            </div>
                            <div class="modal-body">
                              <!-- Conteúdo do seu modal -->
                              <p>Monitore a quantidade de exercícios que você tem praticado.</p>
                                           
                                    <input type="text" name="nome_exercicio"
                                        style="height: 48px; border-radius: 5px; width:90%; overflow: hidden; "
                                        value="@if (!empty($status->nome_exercicio)) {{ $status->nome_exercicio }} @elseif (!empty(old('nome_exercicio'))){{ old('nome_exercicio') }}@else{{ '' }} @endif">
                                   
                                    <div class="container mt-4">
                                      <div class="row justify-content-center">
                                        <div class=" col text-center">

                                  <button style="padding: 15px; 
                                  text-align: center; 
                                  display: inline-block; 
                                  font-size: 16px;
                                  background-color: white; 
                                  width: 70px;  
                                  height: 80px;
                                  border-radius: 15px;
                                  border: 2px solid #C770D1;
                                  font-size: 15px"
                                  type="button"
                                  disabled
                                  ><img style="width: 4em; display: inline-block;" 
                                    src="../../imagens/agradavel.png" alt="imagem">
                                  </button>
                                    <h6>Agradável</h6>
                                      </div>

                                    <div class=" col text-center">
                                    <button style="padding: 15px; 
                                    text-align: center; 
                                    display: inline-block; 
                                    font-size: 16px;
                                    background-color: white; 
                                    width: 70px;  
                                    height: 80px;
                                    border-radius: 15px;
                                    border: 2px solid #C770D1;
                                    font-size: 15px"
                                    disabled
                                    type="button"><img style="width: 4em; display: inline-block;" 
                                    src="../../imagens/pouco.png" alt="imagem"></button>
                                      <h6>Pouco</h6>
                                    </div>

                                    <div class=" col text-center">
                                      <button style="padding: 15px; 
                                      text-align: center; 
                                      display: inline-block; 
                                      font-size: 16px;
                                      background-color: white; 
                                      width: 70px;  
                                      height: 80px;
                                      border-radius: 15px;
                                      border: 2px solid #C770D1;
                                      font-size: 15px"
                                      disabled
                                      type="button"><img style="width: 4em; display: inline-block;" 
                                      src="../../imagens/nada.png" alt="imagem">
                                        </button>
                                        <h6>Nada</h6>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    
                    <!--Modal3-->

                    <div class="col text-center">
                      <button style="padding: 10px; 
                      text-align: center; 
                      display: inline-block; 
                      font-size: 16px;
                      background-color: #8DE1B8; 
                      width: 70px;  
                      height: 80px;
                      border-radius: 15px;
                      border: 2px solid #8DE1B8;
                      font-size: 15px" 
                    type="button" 
                    data-bs-toggle="modal" 
                    data-bs-target="#Modal3">
                    <img style="width: 4em; display: inline-block;" 
                    src="../../imagens/pele.png" alt="imagem">
                        
                      </button>
                      <h6>Pele</h6>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" style="margin-top: 100px; padding: 10px">
                        <div class="modal-dialog d-flex justify-content-center align-items-center">
                          <div class="modal-content custom-modal-background">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalLabel">Pele</h5>
                            </div>
                            <div class="modal-body">
                              <!-- Conteúdo do seu modal -->
                              <p>Monitore a condição da sua pele hoje.</p>

                              <input type="text" name="nome_pele"
                                        style="height: 48px; border-radius: 5px; width:90%; overflow: hidden; "
                                        value="@if (!empty($status->nome_pele)) {{ $status->nome_pele }} @elseif (!empty(old('nome_pele'))){{ old('nome_pele') }}@else{{ '' }} @endif">
                                   
                              <div class="container mt-4">
                                <div class="row justify-content-center">
                                  <div class=" col text-center">
                              <button style="padding: 15px; 
                              text-align: center; 
                              display: inline-block; 
                              font-size: 16px;
                              background-color: white; 
                              width: 70px;  
                              height: 80px;
                              border-radius: 15px;
                              border: 2px solid #C770D1;
                              font-size: 15px"
                              type="button"
                              disabled
                              ><img style="width: 4em; display: inline-block;" 
                                src="../../imagens/saudavel.png" alt="imagem">
                               </button>
                                <h6>Saudável</h6>
                                  </div>

                                <div class=" col text-center">
                                <button style="padding: 15px; 
                                text-align: center; 
                                display: inline-block; 
                                font-size: 16px;
                                background-color: white; 
                                width: 70px;  
                                height: 80px;
                                border-radius: 15px;
                                border: 2px solid #C770D1;
                                font-size: 15px"
                                disabled
                                type="button"><img style="width: 4em; display: inline-block;" 
                                src="../../imagens/sensivel.png" alt="imagem"></button>
                                  <h6>Sensível</h6>
                                </div>

                                <div class=" col text-center">
                                  <button style="padding: 15px; 
                                  text-align: center; 
                                  display: inline-block; 
                                  font-size: 16px;
                                  background-color: white; 
                                  width: 70px;  
                                  height: 80px;
                                  border-radius: 15px;
                                  border: 2px solid #C770D1;
                                  font-size: 15px" 
                                  disabled
                                  type="button"><img style="width: 4em; display: inline-block;" 
                                  src="../../imagens/irritada.png" alt="imagem">
                                    </button>
                                    <h6>Irritada</h6>
                                </div>
                            </div>
                          </div>
                        </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                      
                  <div class="container mt-5">
                    <div class="row justify-content-center">
                      <div class=" col text-center">
                        <button type="button" style="padding: 20px; 
                        text-align: center; 
                        display: inline-block; 
                        font-size: 16px;
                        background-color: #f0a7f8; 
                        width: 300px;  
                        height: 100px;
                        border-radius: 15px;
                        border: 2px solid #f0a7f8;
                        font-size: 15px">
                        <a href="{{ route('troca.create') }}" style="color:black; text-decoration:none">
                        <h6>Trocou sua bolsa?</h6>
                        <p>Registre as informações da troca.</p></a>
                        </button>
                      </div>
                    </div>
                  </div>
                  
                  

                    <br><br>
                
                <div class="col text-center">
                
                <button type="submit" style="padding: 5px; 
                text-align: center; 
                display: inline-block; 
                font-size: 16px;
                background-color: #C770D1; 
                width: 100px;  
                height: 40px;
                border-radius: 5px;
                color: white;
                font-size: 15px">Salvar
            </button>

            <button style="padding: 5px; 
                text-align: center; 
                display: inline-block; 
                font-size: 16px;
                background-color: #C770D1; 
                width: 100px;  
                height: 40px;
                border-radius: 5px;">
                <a href="{{ route('status.index') }}" style="color:white; text-decoration:none">Voltar</a>
            </button>
                </div>
            </form>
        </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection
