<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function login(Request $request){
        if(auth()->attempt(['email' => $request->email,'password' => $request->password])){
            return redirect()->route('home');
        }else{
            return back()->with('message', 'Invalid creditentials');
        }
        
    }
}
