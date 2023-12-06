@extends('base.app')

@section('titulo', 'Listagem de Agendamentos')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <div style="background-color: #F2D1F5; display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding: 15px 30px; width: 100%">
  <div>
     <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        <img style="width: 6em; display: inline-block;" 
            src="../../imagens/gota-sangue.png" alt="imagem">
    </x-responsive-nav-link>

    <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
      Listagem de Agendamentos
    </p>
  </div>
<div>
</div>
</div>

<div style="width:100%; padding: 40px">
        <h3 style="font-size: 18px">Listagem de agendamentos de consultas</h3>

        <div style="align-self:center;" id="formulario">
            <form action="{{ route('agendamento.search') }}" method="post" class="row g-3">
            @csrf <!-- cria um hash de segurança -->
            <div class="col-md-8">
                <select style="border: 1px solid #F2D1F5; border-radius: 5px;" name="tipo" >
                    <option value="data_agendamento">Data</option>
                    <option value="horario">Horário</option>
                  
                </select> 
            <input style="border: 1px solid #F2D1F5; border-radius: 5px" type="text" name="valor" placeholder="Pesquisar">
            
            <button type="submit" style="padding: 5px; 
                text-align: center; 
                display: inline-block; 
                font-size: 16px;
                background-color: #C770D1; 
                width: 100px;  
                height: 40px;
                border-radius: 5px;
                color: white;
                font-size: 15px">Buscar
            </button>

            <button style="padding: 5px; 
                text-align: center; 
                display: inline-block; 
                font-size: 16px;
                background-color: #C770D1; 
                width: 100px;  
                height: 40px;
                border-radius: 5px;">
                <a href="{{ route('agendamento.create') }}" style="color:white; text-decoration:none">Cadastrar</a>
            </button>

            <button style="padding: 5px; 
                text-align: center; 
                display: inline-block; 
                font-size: 16px;
                background-color: #C770D1; 
                width: 100px;  
                height: 40px;
                border-radius: 5px;">
                <a href="{{ route('agendamento.chart') }}" style="color:white; text-decoration:none">Gráfico</a>
            </button>
            </div>
        </form>
        </div>
    </div>

    <div style="width: 92%; text-align: center; align-content: center">
                <table class="table" style="margin: 40px">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Clínica</th>
                    <th scope="col">Data</th>
                    <th scope="col">Horário</th>
                    <th scope="col">Ações</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($agendamentos as $item)
                    <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->clinica->nome ?? '' }}</td>
                    <td>{{ $item->data_agendamento }}</td>
                    <td>{{ $item->horario }}</td>
                    <td>
                        <a style="color: #C770D1" href="{{ route('agendamento.edit', $item->id) }}">Editar</a>
                    </td>
                    <td>
                    <a style="color: #C770D1; margin-left: 10px" href="{{ route('agendamento.destroy', $item->id) }}">Excluir</a>
                    </td>
                    </tr>
                @endforeach 
                </tbody>
                </div>
            </div>
        </div>
    </div>
@endsection
