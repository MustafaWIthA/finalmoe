<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Project;
use DB;

class Status extends Component
{
    public function render()
    {

        $allprojects = DB::table('projects')->count();
        
        $running = DB::table('projects')
                ->where('status', 'Running')->exists();
        $Suspended = DB::table('projects')
                ->where('status', 'Suspended')->exists();
        return view('livewire.status', [
                    'allprojects'=>$allprojects,
                    'running'=>$running,
                    'Suspended'=>$Suspended]
                );
    }
}
