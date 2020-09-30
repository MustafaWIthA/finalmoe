<?php

namespace App\Http\Livewire;

// use App\Type;

use App\State;
use App\Type;
use Livewire\Component;

class Reports extends Component

{
    public $type_id='';
    public $state_id='';
    
    public $foo = "foo00";

    public function render()
    {


        // $types = Type::all();
        // $status = State::all();
        return view('livewire.reports'
        //     'status'=>$status,
        //     'types'=>$types,]
    );
    }
}
