<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 *
 * @property $id
 * @property $name_task
 * @property $id_status
 * @property $description
 * @property $id_user
 * @property $date_ini
 * @property $date_end
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Task extends Model
{

    protected

    static $rules = [
		'name_task' => 'required',
		'description' => 'required',
		'date_ini' => 'required',
		'date_end' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_task','id_status','description','date_ini','date_end'];

    public function setFechaVencimientoAttribute($value){
      $date_end = Carbon::createFromFormat('Y/m/d H:i:s',$value);
      $this->attributes['date_end'] = $date_end;
    }

}
