<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
   
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

    public function login(Request $request){

        //validacion

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
            
        ];
        
        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)){

            $request->session()->regenerate();
            $user = User::select('*')
                ->where('email',$request->email) //TODO: 1 dinamic
                ->get();
            // $request->session()->flash('id', $user[0]->id);
            // $request->session()->keep(['id', $user[0]->id]);
            session(['id'=> $user[0]->id]);
            
            // dd($request->session()->all());
            return redirect()->intended(route('privada'));
            
    } else {
        return redirect(route('login'));
    }

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));

    }
   
}


