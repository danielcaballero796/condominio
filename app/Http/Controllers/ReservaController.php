<?php

namespace Condominio\Http\Controllers;

use Condominio\Recibo;
use Condominio\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    /**
     * Index de la Notificacion
     */
    public function index()
    {
        return view('reserva');
    }

    /**
     * para crear a una Notificacion
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
    }

    /**
     * Guarda los datos de la
     * @param Request $request
     */
    public function store(Request $request)
    {
        //se busca el id de la vivienda
        $sql = 'Select idvivienda from vivienda where numero = '.$request->numero. ' and bloque = '."'" .$request->bloque."'" ;
        $idvivienda= DB::select($sql)[0]->idvivienda;

        //se crea el recibo
        $recibo= new Recibo();
        $recibo->fecha = $request->fecha;
        $recibo->valor = $request->valor;
        $recibo->save();

        //se busca el id del recibo recien creado
        $sql2 = 'Select idrecibo from recibo ORDER BY idrecibo DESC';
        $idrecibo = DB::select($sql2)[0]->idrecibo;

        $reserva = new Reserva();
        $reserva->fecha=$request->fecha;
        $reserva->valor=$request->valor;
        $reserva->idvivienda=$idvivienda;
        $reserva->idrecibo=$idrecibo;
        $reserva->idinstalacion=$request->instalacion;
        $reserva->save();

        flash('Se realizo correctamente el registro de la instalacion')->success();
        return redirect('reserva');
    }

    /**
     * Muestra a los usuarios para enviar una Notificacion
     */
    public function show()
    {
        //
    }

    /**
     * Edita a una Notificacion
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
     * Actualiza a una Notificacion
     * @param $id
     */
    public function destroy($id)
    {
        //
    }

}
