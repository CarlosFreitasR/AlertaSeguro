<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Fonte do google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div id="container">
        <header>
            <img src="{{ asset('img/Oficial.png') }}" alt="Logo">
            <nav>
                <a href="{{ url('/') }}">Início</a>
                <a href="{{ url('/login') }}">Login</a>
            </nav>
        </header> 

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
