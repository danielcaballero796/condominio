<?php

namespace Condominio\Http\Controllers;

use Condominio\Persona;
use Condominio\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Laracasts\Flash\Flash;


class PersonaController extends Controller
{
    /**
     * Index de la persona
     */
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(5);

        return view('auth.saludo')->with('users', $users);

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
        flash('Se guardo correctamente')->success();
        return redirect('saludo');
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
