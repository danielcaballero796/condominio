<?php

namespace Condominio\Http\Controllers;

use Condominio\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    /**
     * Index de la persona
     */
    public function index()
    {
        //
    }

    /**
     * para crear a una persona
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('inicio');
    }

    /**
     * Guarda los datos de la Persona
     * @param Request $request
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $persona = new Persona($request->all());
        $persona->save();
        dd('exito');
    }

    /**
     * Muestra a una Persona
     * @param $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Edita a una Persona
     * @param $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Actualiza a un usuario
     * @param Request $request
     * @param $id
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Actualiza a una Persona
     * @param $id
     */
    public function destroy($id)
    {
        //
    }

}
