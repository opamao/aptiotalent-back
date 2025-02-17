<?php

namespace App\Http\Controllers;

use App\Models\JobCategories;
use App\Models\JobExperience;
use App\Models\JobLevel;
use App\Models\JobQualification;
use App\Models\JobTypes;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = JobCategories::all();
        $level = JobLevel::all();
        $types = JobTypes::all();
        $experiences = JobExperience::all();
        $qualifications = JobQualification::all();

        return view('jobs.job-list', compact('categories', 'level', 'types', 'experiences', 'qualifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
