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

        <a href="{{ url('/join') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Unirse a partida</a>
        <h2 class="text-center">Crear partida</h2>


        <form method="POST" class="form-group" action="/create">
            @csrf

            <div>
                <label for="playerName">Nombre del jugador</label>

                <input id="playerName" name="playerName" type="text" class="form-control @error('playerName') is-invalid @enderror">

                @error('playerName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>

    </body>
</html>
