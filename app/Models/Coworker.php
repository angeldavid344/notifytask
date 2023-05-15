<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coworker
 *
 * @property $id
 * @property $user_id
 * @property $contrato_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Contrato $contrato
 * @property Reserva[] $reservas
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coworker extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'contrato_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','contrato_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contrato()
    {
        return $this->hasOne('App\Models\Contrato', 'id', 'contrato_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'co_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
