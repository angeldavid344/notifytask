<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Espacio
 *
 * @property $id
 * @property $nombre
 * @property $tipo
 * @property $is_reservable
 * @property $created_at
 * @property $updated_at
 *
 * @property Reserva[] $reservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Espacio extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipo' => 'required',
		'is_reservable' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipo','is_reservable'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'espacio_id', 'id');
    }
    

}
