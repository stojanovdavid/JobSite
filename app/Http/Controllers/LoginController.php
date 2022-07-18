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
        if(auth()->attempt(['email' => $request->email,'password' => $request->password, 'role' => "Employer"])){
            return redirect()->route('employer.dashboard');
        }else if(auth()->attempt(['email' => $request->email,'password' => $request->password, 'role' => "Job Seeker"])){
            return redirect()->route('employee.dashboard');
        }else{
            
            return back()->with('message', 'Invalid creditentials');
        }
        
    }
}
