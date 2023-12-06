@extends('base.app')

@section('titulo', 'Formulário de Agendamento')

@section('content')
    @php
        // dd($agendamento); // é igual ao var_dump()
        if (!empty($agendamento->id)) {
            $route = route('agendamento.update', $agendamento->id);
        } else {
            $route = route('agendamento.store');
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
        Cadastro de Agendamento
        </p>
    </div>
    </div>


   <div class="mx-auto py-12 divide-y md:max-w-4xl" style="align-items: center">
            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-12 mx-5 pt-6 pb-6 mb-4">

                <h3 class="pt-4 text-2xl font-medium">Formulário de agendamento de consulta</h3>
                @csrf
                <!-- cria um hash de segurança -->

                @if (!empty($agendamento->id))
                    @method('PUT')
                @endif

                <input type="hidden" name="id"
                    value="@if (!empty($agendamento->id)) {{ $agendamento->id }}@elseif (!empty(old('id'))){{ old('id') }}@else{{ '' }} @endif">
                        <label class="block">
                            <span class="text-gray-700">Data Agendamento</span>
                            <input type="date" name="data_agendamento"
                            style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                                value="@if (!empty($agendamento->data_agendamento)) {{ $agendamento->data_agendamento }} @elseif (!empty(old('data_agendamento'))){{ old('data_agendamento') }}@else{{ '' }} @endif">
                        </label>
                  

                        <label class="block">
                            <span class="text-gray-700">Horário</span>
                            <input type="text" name="horario"
                            style="height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7; margin-top: 10px; margin-right: 30px; padding-left: 16px;"
                                value=" @if (!empty($agendamento->horario)) {{ $agendamento->horario }}@elseif(!empty(old('horario'))){{ old('horario') }}@else{{ '' }} @endif"><br><br>
                        </label>
                

                {{-- dd($clinicas) --}}
                <label class="block">
                    <span class="text-gray-700">Clínica</span>
                    <select name="clinica_id"
                    style="border: 1px solid grey; height: 48px; border-radius: 5px; width:100%; overflow: hidden; background-color: #F5E7F7;  margin-bottom: 10px; margin-right: 30px; padding-left: 16px;"
                    class="form-select mt-2 mb-3">
                        @foreach ($clinicas as $item)
                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                        @endforeach
                    </select>
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
                <a href="{{ route('agendamento.index') }}" style="color:white; text-decoration:none">Voltar</a>
            </button>
            </form>
        </div>
    </div>
@endsection
