<?php

namespace App\Http\Livewire;

// use App\Type;

use App\District;
use App\Priority;
use App\Project;
use App\Region;
use App\Sector;
use App\State;
use App\Type;
use Livewire\Component;

class Reports extends Component

{
    public $state_id;
    public $type_id;
    public $proirity_id=1;
    public $region_id=1;
    public $sector_id=1;
    public $district_id=1;
    

 

    public function render()
    {
        

        $r= Region::findOrfail($this->region_id);
        $d=District::findOrfail($this->district_id);
        $p=Priority::findOrfail($this->proirity_id);
        $s=Sector::findOrfail($this->sector_id);
        

            
            $selectedprojects = Project::with('Regions','Districts')->where('state_id', $this->state_id)
                                ->where('type_id', $this->type_id)
            ->whereHas('regions', function($q) use ($r){
                        $q->whereIn('region_id', $r);})
            ->WhereHas('priorities',function ($q) use ($p){
                        $q->whereIn('priority_id', $p );})
            // ->WhereHas('sectors',function ($q) use ($s){
            //             $q->whereIn('sector_id', $s );})
            ->WhereHas('districts',function ($q) use ($d){
                        $q->whereIn('district_id', $d );})
            ->get();
            
      

        return view('livewire.reports',[
            'selectedprojects'=>$selectedprojects,
        ]);
    }
}
