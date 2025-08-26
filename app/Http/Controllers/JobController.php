<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //view all job
        $jobdata = Job::all();
        return view('jobs.index',compact('jobdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //add job
         return view('jobs.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store new data
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'company'=>'required',
            'location'=>'required',
            'salary'=>'required',

        ]);
        job::create($request->all());
        return redirect()->route('jobs.index')
        ->with('success','jobs added successfully');
    }

    /**
     * Display the specified resource.
     */
public function show(Job $job)    {
        //show single job details
        return view('jobs.show',compact('job'));

    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit(Job $job)
    {
        //single view with details
        return view('jobs.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Job $job)
    {
        //update all job
         $request->validate([
            'title'=>'required',
            'description'=>'required',
            'company'=>'required',
            'location'=>'required',
            'salary'=>'required',

        ]);
        $job->update($request->all());
         return redirect()->route('jobs.index')
        ->with('success','jobs update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
public function destroy(Job $job)
    {
        //
         $job->delete();
         return redirect()->route('jobs.index')
        ->with('success','jobs deleted successfully');

    }
}
