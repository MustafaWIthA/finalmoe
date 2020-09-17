<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index');
    }


     /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
       
         return view('projects.show', compact('project'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;

        $attributes = request()->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required|max:25',
            'type' => 'required|max:25',
            'budget' => 'required',
            'start_date' => 'required|max:255',
            'end_date' => 'required|max:255',
            'sectors' => 'required',
            'priorities' => 'required',
        ]);


        $project = new Project([
            'user_id' => auth()->id(),
            'title' => $attributes['title'],
            'description' => $attributes['description'],
            'type' => $attributes['type'],
            'status' => $attributes['status'],
            'budget' => $attributes['budget'],
            'start_date' => $attributes['start_date'],
            'end_date' => $attributes['end_date'],
        ]);
            $project->save();

        $priorities = $attributes['priorities'];
        $sectors = $attributes['sectors'];
        $project->Sectors()->attach($sectors);
        $project->priorities()->attach($priorities);  // ->Priorities()->sync($priorities);

        //return $project;
       return redirect()->route('projects.index')->with('success','the Project has been created successfully!');;

    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
