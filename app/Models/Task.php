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
    protected $fillable = ['name_task','id_status','description','id_user','date_ini','date_end'];



}
