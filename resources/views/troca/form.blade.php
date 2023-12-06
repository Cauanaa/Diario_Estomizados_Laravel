@extends('base.app')

@section('titulo', 'Formulário de Troca de Bolsa')

@section('content')
    @php
        if (!empty($troca->id)) {
            $route = route('troca.update', $troca->id);
        } else {
            $route = route('troca.store');
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
        Cadastro de Trocas
        </p>
    </div>
    </div>

    <div class="mx-auto py-12 divide-y md:max-w-4xl" style="align-items: center">
            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-12 mx-5 pt-6 pb-6 mb-4">

                <h3 class="pt-4 text-2xl font-medium"> Informações sobre a troca </h3>
                <p class="pt-4 text font-small"> Informe alguns dados sobre a troca da sua bolsa: </p>
                <br>
                @csrf
                <!-- cria um hash de segurança -->

                @if (!empty($troca->id))
                    @method('PUT')
                @endif

                <input type="hidden" name="id"
                    value="@if (!empty($troca->id)) {{ $troca->id }}@elseif (!empty(old('id'))){{ old('id') }}@else{{ '' }} @endif">

                <label class="block">
                    <span class="text-gray-700">Data de aplicação</span>
                    <input type="date" name="aplicada"
                    style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                        value="@if (!empty($troca->aplicada)) {{ $troca->aplicada }} @elseif(!empty(old('aplicada'))) {{ old('aplicada') }} @else {{ '' }} @endif">
                </label>
            
                <label class="block">
                    <span class="text-gray-700">Data de remoção</span>
                    <input type="date" name="removida"
                    style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                        value="@if (!empty($troca->removida)) {{ $troca->removida }} @elseif(!empty(old('removida'))) {{ old('removida') }} @else {{ '' }} @endif">
                </label>   

                <label class="block">
                    <span class="text-gray-700">Motivo da mudança</span>
                    <input type="text" name="motivo"
                    style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                        value="@if (!empty(old('motivo'))) {{ old('motivo') }}@elseif(!empty($troca->motivo)){{ $troca->motivo }}@else{{ '' }} @endif"><br><br>
                </label>

                <label class="block">
                    <span class="text-gray-700">Condições da pele</span>
                    <input type="text" name="condicoes"
                    style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                        value="@if (!empty(old('condicoes'))) {{ old('condicoes') }}@elseif(!empty($troca->condicoes)){{ $troca->condicoes }}@else{{ '' }} @endif"><br><br>
                </label>

                <label class="block">
                    <span class="text-gray-700">Notas</span>
                    <input type="text" name="notas"
                    style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                        value="@if (!empty(old('notas'))) {{ old('notas') }}@elseif(!empty($troca->notas)){{ $troca->notas }}@else{{ '' }} @endif"><br><br>
                </label>
               
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
                <a href="{{ route('troca.index') }}" style="color:white; text-decoration:none">Voltar</a>
            </button>
            </form>
        </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection
