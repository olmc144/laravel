@extends('layout')

@section('contenido')
    <h1>Contactos</h1>
    <h2>Escríbeme</h2>
    <form action="contacto" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
        {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
        <br>

        <label for="email">Email</label><br>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        {!! $errors->first('email', '<span class=error>:message</span>') !!}
        <br>

        <label for="mensaje">Mensaje</label><br>
        <textarea name="mensaje" id="mensaje" cols="5" rows="10">{{ old('mensaje') }}</textarea>
        {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
        <br>
        <input type="submit" value="Enviar" id="enviar">
    </form>
@stop