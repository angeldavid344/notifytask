<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $first_name
 * @property $second_name
 * @property $Surname
 * @property $second_surname
 * @property $identification_document
 * @property $nationality
 * @property $sex
 * @property $birthdate
 * @property $email
 * @property $mobile_number
 * @property $country
 * @property $home
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'first_name' => 'required|string',
		'second_name' => 'nullable',
		'Surname' => 'required|string',
		'second_surname' => 'nullable',
		'identification_document' => 'nullable',
		'nationality' => 'nullable',
		'sex' => 'nullable',
		'birthdate' => 'nullable|date',
		'email' => 'required',
		'mobile_number' => 'nullable',
		'country' => 'nullable',
		'home' => 'nullable',
		'status' => 'nullable',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','second_name','Surname','second_surname','identification_document','nationality','sex','birthdate','email','mobile_number','country','home','status'];



}
