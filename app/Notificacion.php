<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 13-06-2017
 * Time: 10:17 AM
 */

namespace Condominio;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends model
{
    use Notifiable;

    protected $table = 'notificacion';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iduser', 'info', 'tipo', 'fecha'
    ];
}





