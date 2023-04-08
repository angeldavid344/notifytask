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
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
    'password' => 'required|min:6',
    ];

    protected $perPage = 20;

    


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email'];

    public function serPaswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function register(Request $request){

      //validar los datos
      try {

          $validator=$request->validate([
              'name' => 'required',
              'email' => 'required|email',
              'password' => 'required|min:6',
          ]);
  

          $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = Hash::make($request->password);

          

          $user->save();

          Auth::login($user);

              

          return redirect(route('privada'));

      } catch (\Illuminate\Database\QueryException $ex) {
          if ($ex->errorInfo[1] == 1062) {
              return redirect()->back()->withErrors(['error' => 'El email ya existe.']);
           }
      }


  }

}