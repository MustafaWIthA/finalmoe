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
        $r= Region::findOrfail(5);
        $p=Priority::findOrfail(2);
        $s=Sector::findOrfail(1);

       
          $projects = Project::whereHas('regions', function($q) use ($r){
                $q->whereIn('region_id', $r);})
                  ->WhereHas('priorities',function ($q) use ($p){
                $q->whereIn('priority_id', $p );})
                ->WhereHas('sectors',function ($q) use ($s){
                    $q->whereIn('sector_id', $s );})
                    ->get();

        return view('livewire.reports', [
            'projects'=>$projects,
            'status'=>State::all(),
            'types'=>Type::all()
        ]);
    }


}
