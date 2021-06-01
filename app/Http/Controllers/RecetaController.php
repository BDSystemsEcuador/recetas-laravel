<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $recetas = ['Hamburguesa','Hot dog', 'Salchipapa'];
        $categorias = ['Postres', 'Comida rápida','Sopas'];
        // return view ('recetas.index')
        //     ->with('recetas',$recetas)
        //     ->with('categorias',$categorias);

        return view('recetas.index', compact('recetas','categorias'));
    }
}
