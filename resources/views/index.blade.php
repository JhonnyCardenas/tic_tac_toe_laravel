<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>Tic Tac Toe - Laravel </h1>
        <div class="shadow-sm p-3 mb-5 bg-white rounded">A jugar</div>
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ url('/join') }}" class="text-md text-gray-700 dark:text-gray-500 underline">Unirse a partida</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/create') }}" class="text-md text-gray-700 dark:text-gray-500 underline">Crear partida</a>
            </li>            
          </ul>        

    </body>
</html>
