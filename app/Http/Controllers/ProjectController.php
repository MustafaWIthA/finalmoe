<?php

namespace App\Http\Controllers;

use App\Agency;
use App\District;
use App\Donor;
use App\Project;
use App\Region;
use App\Sector;
use App\State;
use App\Type;
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
       
         return view('projects.show', [
                'project'=>$project,
                'Status'=>State::all(),
             
             ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[
            'Types'=>Type::all(),
            'Status'=>State::all(),
            'Regions'=>Region::all(),
            'Districts'=>District::all(),
            'Donors'=>Donor::all(),

        ]);
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
            'target' => 'required|max:255',
            'description' => 'required',
            'state_id' => 'required|max:25',
            'type_id' => 'required|max:25',
            'budget' => 'required',
            'start_date' => 'required|max:255',
            'end_date' => 'required|max:255',
            'sectors' => 'required',
            'priorities' => 'required',
            'regions' => 'required',
            'donors' => 'required',
            'agencies' => 'required',
            'districts' => 'required',
        ]);

       


        $project = new Project([
            'user_id' => auth()->id(),
            'title' => $attributes['title'],
            'description' => $attributes['description'],
            'target' => $attributes['target'],
            'type_id' => $attributes['type_id'],
            'state_id' => $attributes['state_id'],
            'budget' => $attributes['budget'],
            'start_date' => $attributes['start_date'],
            'end_date' => $attributes['end_date'],
        ]);
        
        $project->save();

        $regions = $attributes['regions'];
        $donors = $attributes['donors'];
        $agencies = $attributes['agencies'];
        $districts = $attributes['districts'];
        $priorities = $attributes['priorities'];
        $sectors = $attributes['sectors'];

        $project->Regions()->attach($regions);
        $project->Donors()->attach($donors);
        $project->Agencies()->attach($agencies);
        $project->Districts()->attach($districts);
        $project->Sectors()->attach($sectors);
        $project->Priorities()->attach($priorities);  // ->Priorities()->sync($priorities);

        //return $project;
      // return redirect()->route('projects.show')->with('success','the Project has been created successfully!');
      return redirect('projects/'.$project->id);

    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit',[
            'Types'=>Type::all(),
            'Status'=>State::all(),
            'project'=>$project,
            'Regions'=>Region::all(),
            'Donors'=>Donor::all(),
            'Districts'=>District::all(),
            'Sectors'=>Sector::all(),
            'Agencies'=>Agency::all(),
        ]);
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

        //dd($project);

        request()->validate([
            'title' => 'required|max:255',
            'target' => 'required|max:255',
            'description' => 'required',
            'state_id' => 'required|max:25',
            'type_id' => 'required|max:25',
            'budget' => 'required',
            'start_date' => 'required|max:255',
            'end_date' => 'required|max:255',
            'sectors' => 'required',
            'priorities' => 'required',
            'regions' => 'required',
            'donors' => 'required',
            'agencies' => 'required',
            'districts' => 'required',
        ]);

     
        $project->user_id = auth()->id();
        $project-> title = $request['title'];
        $project-> description = $request['description'];
        $project-> target = $request['target'];
        $project-> type_id = $request['type_id'];
        $project-> state_id = $request['state_id'];
        $project-> budget = $request['budget'];
        $project-> start_date = $request['start_date'];
        $project-> end_date = $request['end_date'];
      
        
        $project->save();

        $regions = $request['regions'];
        $donors = $request['donors'];
        $agencies = $request['agencies'];
        $districts = $request['districts'];
        $priorities = $request['priorities'];
        $sectors = $request['sectors'];

        $project->Regions()->sync($regions);
        $project->Donors()->sync($donors);
        $project->Agencies()->sync($agencies);
        $project->Districts()->sync($districts);
        $project->Sectors()->sync($sectors);
        $project->Priorities()->sync($priorities);

      return redirect('projects/'.$project->id)->with('success','the project has been updated successfully!');
    //   return redirect()->back()->with('success','the user has been update successfully!');;


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
