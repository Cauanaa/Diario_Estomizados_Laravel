@extends('base.app')

@section('titulo', 'Formulário de Clinica')

@section('content')
    @php
        // dd($clinica); // é igual ao var_dump()
        if (!empty($clinica->id)) {
            $route = route('clinica.update', $clinica->id);
        } else {
            $route = route('clinica.store');
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
        Cadastro de Clínica
        </p>
    </div>
    </div>

    <div class="mx-auto py-12 divide-y md:max-w-4xl" style="align-items: center">
            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-12 mx-5 pt-6 pb-6 mb-4">

                <h3 class="pt-4 text-2xl font-medium">Formulário de clínica</h3>

                @csrf
                <!-- cria um hash de segurança -->

                @if (!empty($clinica->id))
                    @method('PUT')
                @endif

                <input type="hidden" name="id"
                    value="@if (!empty($clinica->id)) {{ $clinica->id }}@elseif (!empty(old('id'))){{ old('id') }}@else{{ '' }} @endif">

                <label class="block">
                    <span class="text-gray-700">Nome</span>
                    <input type="text" name="nome"
                    style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                        value="@if (!empty($clinica->nome)) {{ $clinica->nome }} @elseif(!empty(old('nome'))) {{ old('nome') }} @else {{ '' }} @endif">
                </label>
            
                <label class="block">
                    <span class="text-gray-700">Contato</span>
                <input type="text" name="contato"
                    style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                    value="@if (!empty($clinica->contato)) {{ $clinica->contato }} @elseif (!empty(old('contato'))){{ old('contato') }}@else{{ '' }} @endif">
                </label>
                    
                <label class="block">
                    <span class="text-gray-700">Email</span>
                    <input type="email" name="email"
                    style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                        value="@if (!empty($clinica->email)) {{ $clinica->email }}@elseif(!empty(old('email'))) {{ old('email') }} @else{{ '' }} @endif"><br><br>
                </label>

                <label class="block">
                    <span class="text-gray-700">Endereço</span>
                    <input type="text" name="endereco"
                    style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                        value="@if (!empty(old('endereco'))) {{ old('endereco') }}@elseif(!empty($clinica->endereco)){{ $clinica->endereco }}@else{{ '' }} @endif"><br><br>
                </label>
                @php
                    $nome_imagem = !empty($clinica->imagem) ? $clinica->imagem : 'sem_imagem.jpg';
                @endphp
                    
                <div class="col-md-6 mb-4">
                <img class="h-40 w-40 object-cover rounded-full" src="/storage/{{ $nome_imagem }}" width="300px"
                    alt="imagem">
                </div>
                <div class="input-group">
                    <input class="form-control" type="file" name="imagem"
                    style="border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; border: 1px solid grey"
                    >
                </div>
                <br>
               
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
                <a href="{{ route('clinica.index') }}" style="color:white; text-decoration:none">Voltar</a>
            </button>
            </form>
        </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection
