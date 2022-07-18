<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function employerIndex(){
        return view('employer.dashboard');
    }

    public function tables(){
        return view('employer.tables');
    }
}
