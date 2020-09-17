<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Project;
use App\Sector;
use DB;

class Status extends Component
{
    public function render()
    {



        $SectorProjects = Sector::withCount('Projects')->get();
        $SectorProjects = Sector::withCount('Projects')->get();
        $allprojects = Project::count();
        
        $running = DB::table('projects')
                ->where('status', 'Running')->exists();
        $Suspended = DB::table('projects')
                ->where('status', 'Suspended')->exists();
        return view('livewire.status', [
                    'allprojects'=>$allprojects,
                    'running'=>$running,
                    'Suspended'=>$Suspended,
                    'SectorProjects'=>$SectorProjects
                    ]
                );
    }
}
