<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //show all jobs
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Jobs::all()
        ]);
    }

    //show single job
    public function show(Jobs $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }
}
