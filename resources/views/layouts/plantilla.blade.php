<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #e4c590;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 40px;
            background-color: #ddd;
            border-bottom: 1px solid #ccc;
        }
        .navbar-left {
            display: flex;
            align-items: center;
        }
        .navbar-left img {
            width: 60px;
            height: 60px;
            margin-right: 10px;
        }
        .welcome-text {
            font-size: 20px;
            font-weight: bold;
            color: black;
            text-decoration: none;
        }
        .navbar-right {
            display: flex;
            align-items: center;
        }
        .navbar-right a {
            margin-left: 15px;
        }
        .navbar-right img {
            margin-left: 15px;
            width: 60px;
            height: 60px;
        }
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .search-bar {
            margin-top: 20px;
            text-align: center;
        }
        .search-bar input {
            width: 80%;
            max-width: 500px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <a href="{{ route('inicio') }}">
                <img src="{{ asset('images/Logo.webp') }}" alt="Logo">
            </a>
            <p class="welcome-text">Turista sin Maps</p>
        </div>
        <div class="navbar-right">
            @if (Auth::check())
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('images/Perfil.jpg') }}" alt="Perfil Admin">
                    </a>
                @else
                    <a href="{{ route('perfil.mostrar') }}">
                        <img src="{{ asset('images/Perfil.jpg') }}" alt="Perfil Usuario">
                    </a>
                @endif
            @else
                <a href="{{ route('iniciar_sesion') }}" class="btn btn-outline-dark">Iniciar Sesión / Registrarse</a>
            @endif
            <a href="{{ route('carrito') }}">
                <img src="{{ asset('images/Carrito.png') }}" alt="Carrito" class="cart-icon">
            </a>
        </div>
    </div>

    <div class="main-container">
        @yield('contenido')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
