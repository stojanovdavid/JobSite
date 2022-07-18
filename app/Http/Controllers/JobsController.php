<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{

    public function index(){
        $jobs = Job::where('posted_by', auth()->user()->id)->get();
        return view('employer.jobs.index', compact('jobs'));
    }

    public function create(){
        return view('employer.jobs.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'job_title' => 'required',
            'work_from' => 'required',
            'job_type' => 'required',
            'salary' => 'required|integer'
        ]);
        Job::create([
            'job_title' => $request->job_title,
            'job_description' => $request->job_desc,
            'work_from' => $request->work_from,
            'job_type' => $request->job_type,
            'salary' => $request->salary,
            'posted_by' => auth()->user()->id,
        ]);

        return redirect()->route('jobs');
    }
}
