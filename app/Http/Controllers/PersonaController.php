<?php

namespace Condominio\Http\Controllers;

use Condominio\Pariente;
use Condominio\Persona;
use Condominio\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
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
        $sql = "Select cedula from users where cedula = ". "'".$request->cedulap. "'";
        $cero= count(DB::select($sql));

        if ($cero==0){
            flash('La cedula del propietario es erronea, no se guardaron los datos')->error();
            return redirect('home');
        }else{
            //se crea la persona
            $persona = new Persona();
            $persona->cedula = $request->cedula;
            $persona->alquilado = $request->alquilado;
            $persona->nombre = $request->nombre;
            $persona->apellido = $request->apellido;
            $persona->numero = $request->numero;
            $persona->bloque = $request->bloque;
            $persona->correo = $request->correo;
            $persona->sexo = $request->sexo;
            $persona->save();
        }
        if ($cero==0){
            //
        }else{
            $cedularepresentante= DB::select($sql)[0]->cedula;
            //se crea el pariente para guardarlo en su respectiva tabla
            $pariente = new Pariente();
            $pariente->cedula = $request->cedula;
            $pariente->cedularepresentante = $cedularepresentante;
            $pariente->parentesco = $request->parentesco;
            $pariente->save();


            flash('Se guardo correctamente')->success();
            return redirect('saludo');
        }


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

    public function mensaje($id)
    {
        $user = User::find($id);
        return view('mensajenot', compact('user'));
    }

}
