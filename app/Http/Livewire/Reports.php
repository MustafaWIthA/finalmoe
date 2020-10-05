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
    public $type_id;
    public $state_id;
    public $state_ids=90;

    public $region_id=1;
    public $district_id=1;
    public $proirity_id=1;
    public $sector_id=1;

    public $status;
    public $types;
    public $projects;
    
  
    public function change(){

       $state_ids= $this->state_id;
         $type_ids= $this->type_id;
    }

  

    public function render()
    {
        $r= Region::findOrfail($this->region_id);
        $p=Priority::findOrfail($this->proirity_id);
        $s=Sector::findOrfail($this->sector_id);

        $p=District::findOrfail($this->district_id);
            
            $selectedprojects = Project::where('state_id', $this->state_id)
            ->where('type_id', $this->type_id)
            ->whereHas('regions', function($q) use ($r){
                        $q->whereIn('region_id', $r);})
            ->WhereHas('priorities',function ($q) use ($p){
                        $q->whereIn('priority_id', $p );})
            ->WhereHas('sectors',function ($q) use ($s){
                        $q->whereIn('sector_id', $s );})
            ->get();
            
            $this->projects = $selectedprojects;
        return view('livewire.reports');
    }



    // public function mount()
    // {
    //     $r= Region::findOrfail(1);
    //     $p=Priority::findOrfail(1);
    //     $s=Sector::findOrfail(1);
            
    //         $state_id= $this->state_id;
    //         $type_id= $this->type_id;


    //         $selectedprojects = Project::where('state_id', $state_id)
    //         ->where('type_id', $type_id)
    //         ->whereHas('regions', function($q) use ($r){
    //                     $q->whereIn('region_id', $r);})
    //         ->WhereHas('priorities',function ($q) use ($p){
    //                     $q->whereIn('priority_id', $p );})
    //         ->WhereHas('sectors',function ($q) use ($s){
    //                     $q->whereIn('sector_id', $s );})
    //         ->get();
            
    //         $this->projects = $selectedprojects;
    

  
    // }
}
