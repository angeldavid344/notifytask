<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class user extends Model
{
    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    //add rules for validation
    public static $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function serPaswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}

