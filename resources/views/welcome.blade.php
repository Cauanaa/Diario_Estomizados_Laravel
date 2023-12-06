<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Diário</title>
</head>

<body class="antialiased">
    <div
        style="padding: 15px; justify-content: space-between; background-color: white; flex: 1; flex-direction: column; text-align: center; height:100% ">
        <div style="margin: 0 auto; background-color: white; text-align: center; width: 80%;">
            <img style="align-self: center; width: 13em" src="../../imagens/imagem_inicio.png" alt="imagem">
            <br>
            <img style="align-self: center; width: 13em" src="../../imagens/homem-acenando.png" alt="imagem">
        </div>

        <div style="align-items: center; background-color: white">
            <h3 style="text-align: center; font-weight: bold; margin-bottom: 10; align-self: center">Estomizados</h3>
            <p style="text-align: center; font-size: 13; width: 80;">
                Acompanhe sua rotina, confira dicas de saúde e monitore seu progresso.</p>
        </div>

        <div>
            @if (Route::has('login'))
            <div>
                @auth
                @else
                <button style="color: white; background-color: #C770D1, text-align: center; font-size: 15px; margin-bottom: 13px; border: 2px solid #C770D1; padding: 15px 32px; width: 250px; border-radius: 20px;">
                    <a href="{{ route('login') }}" style="color: #C770D1; text-decoration: none">Tenho uma conta</a>
                </button> <br>
                @if (Route::has('register'))
                <button style="border: 2px solid #C770D1; padding: 15px 32px; text-align: center; display: inline-block; font-size: 15px; margin-bottom: 13px; background-color: #C770D1; width: 250px;  border-radius: 20px">
                    <a href="{{ route('register') }}" style="color: white; text-decoration: none">Comece agora</a>
                </button>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</body>
</html>