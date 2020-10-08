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
use Livewire\WithPagination;

class Reports extends Component

{

    use WithPagination;
    public $state_id;
    public $type_id;
    public $priority_id;
    public $region_id;
    public $year;
    public $sector_id;
    public $district_id;
    
    public $perPage = 10;
    public $sortField='title';
    public $sortAsc = false;
    public $search = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }
 

    public function render()
    {
    
          $query = Project::where('state_id', $this->state_id);
                    
        
            if($this->type_id) {
                    $query->where('type_id', $this->type_id);
            }
            if($this->year) {
                    $query->whereYear('start_date', $this->year);
            }

            if($this->district_id) {
                    $d=District::findOrfail($this->district_id);
                    $query->WhereHas('districts',function ($q) use ($d){
                            $q->whereIn('district_id', $d );
                });
            }
            if($this->region_id) {
                    $r= Region::findOrfail($this->region_id);
                    $query->WhereHas('regions',function ($q) use ($r){
                            $q->whereIn('region_id', $r);
                    
                });
            }
            if($this->sector_id) {
                    $s=Sector::findOrfail($this->sector_id);
                    $query->WhereHas('sectors',function ($q) use ($s){
                            $q->whereIn('sector_id', $s);
                    
                });
            }
            if($this->priority_id) {
                    $p=Priority::findOrfail($this->priority_id);
                    $query->WhereHas('priorities',function ($q) use ($p){
                            $q->whereIn('priority_id', $p);
                    
                });
            }
           

            $selectedprojects = $query->paginate($this->perPage);;

            
            // $selectedprojects = Project::with('Regions','Districts')->where('state_id', $this->state_id)
            //                     ->where('type_id', $this->type_id)
            // ->whereHas('regions', function($q) use ($r){
            //             $q->whereIn('region_id', $r);})
            // ->WhereHas('priorities',function ($q) use ($p){
            //             $q->whereIn('priority_id', $p );})
            // // ->WhereHas('sectors',function ($q) use ($s){
            // //             $q->whereIn('sector_id', $s );})
            // ->WhereHas('districts',function ($q) use ($d){
            //             $q->whereIn('district_id', $d );})
            // ->get();
            
      
        return view('livewire.reports',[
            'selectedprojects'=>$selectedprojects,
        ]);
    }
}
