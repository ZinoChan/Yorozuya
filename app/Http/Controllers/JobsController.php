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
            'jobs' => Jobs::latest()->filter(request(['search']))->simplePaginate(3)
        ]);
    }

    //show single job
    public function show(Jobs $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    //create job form
    public function create()
    {
        return view('jobs.create');
    }

    //Store job data
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'company' => 'required|max:100',
            'position' => 'required|max:150',
            'location' => 'required|max:100',
            'website' => 'required|max:200',
            'contract' => 'required',
            'description' => 'required',
            'expertise' => 'required',
            'expertiseTags' => 'required',
            'role' => 'required',
            'roleTags' => 'required',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
             
        ]);

        
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        

        Jobs::create($formFields);
       
        return redirect('/')->with('success', 'job created successfully!');
    }


    //Edit job data
    public function edit(Jobs $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    //Update job data
    public function update(Request $request, Jobs $job)
    {

        $formFields = $request->validate([
            'company' => 'required|max:100',
            'position' => 'required|max:150',
            'location' => 'required|max:100',
            'website' => 'required|max:200',
            'contract' => 'required',
            'description' => 'required',
            'expertise' => 'required',
            'expertiseTags' => 'required',
            'role' => 'required',
            'roleTags' => 'required'
        ]);

        if ($request->hasFile('logo')) {

            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }


        $job->update($formFields);
        return back()->with('success', 'job updated successfully!');
    }

    //Delete a job
    public function destroy(Jobs $job)
    {
        $job->delete();
        return redirect('/')->with('success', 'job deleted successfully!');
    }
}
