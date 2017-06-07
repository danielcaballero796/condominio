<?php

namespace Condominio\Http\Controllers;

use Illuminate\Http\Request;
use Condominio\User;
use Condominio\vivienda;
use Yajra\Datatables\Datatables;

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
        $lista = User::all();
        return view('auth.saludo', compact ('lista'));
    }

}
