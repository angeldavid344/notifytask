<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSession(Request $request)
    {
        if($request->session()->has('channel')){
            echo $request->session()->get('channel');
        } else {
            echo 'Session not exist';
        }
    }
    public function storeSession(Request $request){
        $request->session()->put('channel', 'Learning Point');
        echo "Session is stored";
    }
}
