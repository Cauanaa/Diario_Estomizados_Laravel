<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de clinicas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <h2 class="text-center">{{$title}}</h2> <br>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table" style="background-color: #CCCCC">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Email</th>
                    <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clinicas ?? '' as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->contato }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->endereco }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
