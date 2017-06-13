<?php

namespace Condominio\Http\Controllers;

use Condominio\Notificacion;
use Condominio\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class notificationController extends Controller
{
    /**
     * Index de la Notificacion
     */
    public function index()
    {
        $notificacion = Notificacion::orderBy('idnotificacion','ASC')->paginate(5);
        return view('mensajes')->with('todos', $notificacion);
    }

    /**
     * para crear a una Notificacion
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

    }

    /**
     * Guarda los datos de la
     * @param Request $request
     */
    public function store(Request $request)
    {
        $notificacion = new Notificacion($request->all());
        $notificacion->save();
        $users = User::all();
        flash('Se envio correctamente la notificacion')->success();
        return view('notificaciones', compact('users'));
    }

    /**
     * Muestra a los usuarios para enviar una Notificacion
     */
    public function show()
    {
        $users = User::all();
        return view('notificaciones', compact('users'));
    }

    /**
     * Edita a una Notificacion
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
     * Actualiza a una Notificacion
     * @param $id
     */
    public function destroy($id)
    {
        //
    }

    /**
     * pasa el usuario a la vista de notificaciones
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mensaje($id)
    {
        $user = User::find($id);
        return view('mensajenot', compact('user'));
    }
}
