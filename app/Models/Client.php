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
		'first_name' => 'required',
		'second_name' => 'required',
		'Surname' => 'required',
		'second_surname' => 'required',
		'identification_document' => 'required',
		'nationality' => 'required',
		'sex' => 'required',
		'birthdate' => 'required',
		'email' => 'required',
		'mobile_number' => 'required',
		'country' => 'required',
		'home' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','second_name','Surname','second_surname','identification_document','nationality','sex','birthdate','email','mobile_number','country','home','status'];



}
