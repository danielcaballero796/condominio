<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 29-05-2017
 * Time: 06:51 PM
 */

namespace Condominio;


class Vivienda
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idvivienda', 'habitada', 'numero','bloque'
    ];


}