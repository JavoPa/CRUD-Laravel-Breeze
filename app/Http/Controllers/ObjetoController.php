<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;

class ObjetoController extends Controller
{
    public function index() //renderiza la vista de objetos/index.blade.php para mostrar los objetos
    {
        $objetos = Objeto::all();
        return view('objetos.index', compact('objetos' ));
    }

    public function create() //renderiza el formulario para crear objetos
    {
        return view('objetos.create');
    }

    public function store(Request $request) //guarda los datos del formulario en la base de datos
    {
        $objeto = new Objeto(); //crea nueva instancia del objeto
        $objeto->nombre = $request->get('nombre'); //obtiene los datos del formulario
        $objeto->descripcion = $request->get('descripcion'); 
        $objeto->save(); //guarda los datos en la base de datos
        return redirect('/objetos');
    }

    public function show($id) //muestra los datos de un objeto en particular
    {
        $objeto = Objeto::findOrFail($id); //busca el objeto en la base de datos y lanza excepcion si no lo encuentra
        return view('objetos.show', compact('objeto'));
    }
    
    public function edit($id) {
        $objeto = Objeto::findOrFail($id);
        return view('objetos.edit', compact('objeto'));
    }

    public function update(Request $request, $id) {
        $objeto = Objeto::findOrFail($id);
        $objeto->nombre = $request->get('nombre');
        $objeto->descripcion = $request->get('descripcion');
        $objeto->save();
        return redirect('/objetos');
    }

    public function destroy($id) {
        $objeto = Objeto::findOrFail($id);
        $objeto->delete();
        return redirect('/objetos');
    }

}
