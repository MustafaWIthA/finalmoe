<?php

namespace App\Http\Livewire;

use App\Sector;
use Livewire\Component;

class Sectors extends Component
{
    public function render()
    {


        $Sectors = Sector::all();
        return view('livewire.sectors', [
            'Sectors' => $Sectors
        ]);
    }
}
