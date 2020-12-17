<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <style>
       .active{
           text-decoration: none;
           color: green;
       }  
       .error{
           color: red;
           font-size: 12px;
       }
    </style>
</head>
<body>    
    <header>
        <?php
            function activeMenu($url){
                return request()->is($url) ? 'active' : '';
            }
        ?>
        {{-- <h1>{{ request()->url() }}</h1> --}}
        <h1>{{ request()->is('/') ? 'Estas en el home' : 'No estas en el home' }}</h1>
        <nav>
        <a class="{{ activeMenu('/') }}"  href="{{ route('home')}}">Inicio</a>
            <a class="{{ activeMenu('saludos/*') }}" href="{{ route('saludos', 'Jorge') }}">Saludo</a>
            <a class="{{ activeMenu('contactame') }}" href="{{ route('contactos') }}">Contacto</a>
        </nav>
    </header>
    @yield('contenido')
    <footer>Copyright © {{ date('Y') }} </footer>
</body>
</html>