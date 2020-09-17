<?php

namespace App\Http\Livewire;

use App\Priority;
use Livewire\Component;

class Priorities extends Component
{
    public function render()
    {

        $Priorities = Priority::all();
        return view('livewire.priorities',[
            'Priorities' => $Priorities
        ]);
    }
}
