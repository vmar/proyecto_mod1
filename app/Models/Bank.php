<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bank
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $ci
 * @property $celular
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bank extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'ci' => 'required',
		'celular' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','ci','celular','correo'];



}
