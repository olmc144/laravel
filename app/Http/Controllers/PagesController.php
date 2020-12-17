<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contactos');
    }

    public function saludo($nombre = "invitado")
    {
        $consolas = [
            "Play Station 4",
            "Xbox One",
            'Wii U'
        ];

        $html = "<h2>ESTE ES UN TITULO</h2>";
        
        return view('saludo', compact('nombre', 'html', 'consolas'));
    }

    public function mensajes(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required|min:5'
        ]);
        return $request->all();
    }
}
