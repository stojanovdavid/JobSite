<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        $roles = DB::table('roles')->get();
        return view('users.create', compact('roles'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role' => 'required'
        ]);

        $id = User::insertGetId([
            'name' => $request->firstName . ' ' . $request->lastName,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if($request->role == "Employer"){
            Employer::create([
                'employer_id' => $id,
                'employer_name' => $request->firstName . ' ' . $request->lastName,
                'employer_username' => $request->username,
            ]);
            return redirect()->route('employer.dashboard');
        }else{
            Employee::create([
                'employee_id' => $id,
                'employee_name' => $request->firstName . ' ' . $request->lastName,
                'employee_username' => $request->username,
            ]);
            return redirect()->route('employee.dashboard');
        }

    }
}
