<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
    


class registerController extends Controller
{

    public function show(){
        // if(Auth::check()){
        //     return redirect()->route('home.index');
        // }
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/home')->with('success', "Account successfully registered.");
        /*
        $user = new User;
         $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->setPassword($request->password);
        $user->save();
        return redirect('/asdasd')->with('success', "Account successfully registered."); */

    }
}
