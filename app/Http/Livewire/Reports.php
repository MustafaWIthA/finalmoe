<?php

namespace App\Http\Livewire;

// use App\Type;

use App\Priority;
use App\Project;
use App\Region;
use App\Sector;
use App\State;
use App\Type;
use Livewire\Component;

class Reports extends Component

{
    public $type_id=1;
    public $state_id=1;
    public $proirity_id=1;
    public $region_id=1;
    


    public $mystate=1;
   

    public function render()
    {


        $r= Region::findOrfail($this->region_id);
        $p=Priority::findOrfail($this->proirity_id);
        $s=Sector::findOrfail(1);

            $selectedprojects = Project::where('state_id', $this->state_id)
            ->where('type_id', $this->type_id)
            ->whereHas('regions', function($q) use ($r){
                        $q->whereIn('region_id', $r);})
            ->WhereHas('priorities',function ($q) use ($p){
                        $q->whereIn('priority_id', $p );})
            ->WhereHas('sectors',function ($q) use ($s){
                        $q->whereIn('sector_id', $s );})
            ->get();
            
           // $this->projects = $selectedprojects;
      

        return view('livewire.reports',[
            'selectedprojects'=>$selectedprojects,
        ]);
    }
}
