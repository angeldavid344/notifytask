<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 *
 * @property $id
 * @property $nombre
 * @property $cant_dias
 * @property $cant_horas
 * @property $cant_horas_sala
 * @property $importe
 * @property $created_at
 * @property $updated_at
 *
 * @property Coworker[] $coworkers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contrato extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'cant_dias' => 'required',
		'cant_horas' => 'required',
		'cant_horas_sala' => 'required',
		'importe' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cant_dias','cant_horas','cant_horas_sala','importe'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coworkers()
    {
        return $this->hasMany('App\Models\Coworker', 'contrato_id', 'id');
    }
    

}
