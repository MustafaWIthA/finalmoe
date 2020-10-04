<?php

namespace App\Http\Controllers;

use App\Priority;
use App\Project;
use App\Region;
use App\Sector;
use App\State;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        return view('home',[
            'user'=>$user
        ]);
    }


 /**
     * Display the specified resource.
     *
     * @param  \App\Donors  $donors
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $r= Region::findOrfail(1);
        $p=Priority::findOrfail(1);
        $s=Sector::findOrfail(1);
        $state_id=1;
        $type_id=1;

        
        $projects = Project::where('state_id', $state_id)
                ->where('type_id', $type_id)
                ->whereHas('regions', function($q) use ($r){
                            $q->whereIn('region_id', $r);})
                ->WhereHas('priorities',function ($q) use ($p){
                            $q->whereIn('priority_id', $p );})
                ->WhereHas('sectors',function ($q) use ($s){
                            $q->whereIn('sector_id', $s );})
                ->get();

        return view('reports.index', [
            'projects'=>$projects,
            'status'=>State::all(),
            'types'=>Type::all()
        ]);
       
    }


}
