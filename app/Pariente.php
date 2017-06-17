<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 06-06-2017
 * Time: 06:44 PM
 */

namespace Condominio;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Pariente extends model
{

    use Notifiable;

    protected $table = 'pariente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 'cedularepresentante', 'parentesco',
    ];




}