<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Project;
use App\Region;
use App\Sector;
use App\State;
use App\Type;

class Status extends Component
{
    public function render()
    {


        // $allprojects = 
        // $SectorProjects =  
        // $StateProjects = 
        // $TypeProjects = ;

  
        return view('livewire.status', [
                    'allprojects'=>Project::count(),
                    'StateProjects'=>State::withCount('Projects')->get(),
                    'TypeProjects'=>Type::withCount('Projects')->get(),
                    'SectorProjects'=>Sector::withCount('Projects')->get(),
                    'RegionProjects'=>Region::withCount('Projects')->get(),
                    ]
                );
    }
}
