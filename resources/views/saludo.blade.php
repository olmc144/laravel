{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <h1>Saludo para {{ $nombre }}</h1>
    {!! $html !!}
    <ul>
        @forelse ($consolas as $item)
            <li>{{ $item }}</li>
        @empty
            <p>No hay consolas :(</p>
        @endforelse
    </ul>
</body>
</html> --}}
@extends('layout')

@section('contenido')
    <h1>Saludos a {{ $nombre }} </h1>
    {!! $html !!}
    <ul>
        @forelse ($consolas as $item)
            <li>{{ $item }}</li>
        @empty
            <p>No hay consolas :(</p>
        @endforelse
    </ul>
@stop