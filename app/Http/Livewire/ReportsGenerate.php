<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReportsGenerate extends Component
{

    public $message = 'Hello World!';

    public $foo="x";

    public function render()
    {
        return view('livewire.reports-generate');
    }
}
