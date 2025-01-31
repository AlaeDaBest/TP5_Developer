<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::all();
        return view('Projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project=new Project();
        $project->name=$request->name;
        $project->description=$request->description;
        $project->start_date=$request->start_date;
        $project->end_date=$request->end_date;
        $project->status=$request->status;
        $project->save();
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project=Project::findOrFail($id);
        return view('Projects.show',['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project=Project::findOrFail($id);
        return view('Projects.edit',['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project=Project::findOrFail($id);
        $project->name=$request->name;
        $project->description=$request->description;
        $project->start_date=$request->start_date;
        $project->end_date=$request->end_date;
        $project->status=$request->status;
        $project->save();
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project=Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index');
    }
}
