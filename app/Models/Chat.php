<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chat
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $email
 * @property $telefono
 * @property $direccion
 * @property $edad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Chat extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellidos', 'email', 'telefono', 'direccion', 'edad'];


}
