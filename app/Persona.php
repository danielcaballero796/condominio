<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 06-06-2017
 * Time: 12:59 PM
 */

namespace Condominio;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Persona extends model
{

    use Notifiable;

    protected $table = 'persona';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 'alquilado', 'nombre', 'apellido', 'correo', 'sexo'
    ];




}