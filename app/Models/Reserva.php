<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $nombre_persona
 * @property $detalles
 * @property $espacio_id
 * @property $fecha
 * @property $hora_ini
 * @property $hora_fin
 * @property $co_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Coworker $coworker
 * @property Espacio $espacio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'detalles' => 'required',
		'espacio_id' => 'required',
		'fecha' => 'required',
		'hora_ini' => 'required',
		'hora_fin' => 'required',
		'co_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_persona','detalles','espacio_id','fecha','hora_ini','hora_fin','co_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coworker()
    {
        return $this->hasOne('App\Models\Coworker', 'id', 'co_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function espacio()
    {
        return $this->hasOne('App\Models\Espacio', 'id', 'espacio_id');
    }
    

}
