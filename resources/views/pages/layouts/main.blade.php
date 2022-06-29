<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="topo">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('sobre-nos.index') }}">Sobre Nós</a></li>
                <li><a href="{{ route('contato.index') }}">Contato</a></li>
            </ul>
        </div>
    </header>
    @yield('content')
</body>

</html>
