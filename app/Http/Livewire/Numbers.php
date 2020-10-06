<?php

namespace App\Http\Livewire;

use App\Project;
use Carbon\Carbon;
use Livewire\Component;

class Numbers extends Component
{

    public $year = 2020;

    public function render()
    {

        
        $thisyear =Carbon::now()->year;
       
        $totalprojects = Project::count();
        return view('livewire.numbers',[
            'thisyear' =>$thisyear,
            'totalprojects'=>Project::whereYear('start_date', $this->year)->count(),
            'totalbudget'=>Project::whereYear('start_date', $this->year)->sum('budget'),
        ]);
    }
}
