<?php

namespace Condominio\Http\Controllers;

use Illuminate\Http\Request;
use Condominio\User;
use Condominio\vivienda;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portada');
    }
    

    public function iniciado()
    {
        return view('inicio');
    }

    public function registro()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function saludo()
    {
        $users = User::all();
        return view('auth.saludo', compact ('users'));
    }

    /**
     * Elimina a una Persona
     * @param $id
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        DB::statement('ALTER TABLE `users` MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT='.$id);

        flash('Se ha eliminado el usuario ' .$user->name. ' exitosamente')->error()->important();
        return redirect()->route('saludo');
    }

    /**
     * para editar a un usuario
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('modificarusers')->with('user',$user);
    }

    /**
     * modifica a un usuario
     * @param $id
     * @return $this
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        flash('El usuario '. $request->name .' se actualizo correctamente')->success();
        return redirect()->route('saludo');
    }



}
