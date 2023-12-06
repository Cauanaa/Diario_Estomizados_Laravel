<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de trocas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <h2 class="text-center">{{$title}}</h2> <br>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table" style="background-color: #CCCCC">
                    <th scope="col">#</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Data de aplicação</th>
                    <th scope="col">Data de remoção</th>
                    <th scope="col">Motivo de troca</th>
                    <th scope="col">Condições da pele</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trocas ?? '' as $item)
                @php
                   $nome_imagem = !empty($item->imagem) ? $item->imagem : 'sem_imagem.jpg';
                   $srcImagem = public_path()."/storage/".$nome_imagem;
                @endphp
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td class="h-32 w-32 object-cover rounded-full"><img src="{{$srcImagem}}"
                    style="width: 100px; height: 60px; object-fit: cover" alt="imagem"></td>
                    <td>{{ $item->aplicada }}</td>
                    <td>{{ $item->removida }}</td>
                    <td>{{ $item->motivo }}</td>
                    <td>{{ $item->condicoes }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
