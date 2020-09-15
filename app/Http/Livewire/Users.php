<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {


        $users = User::all();
        return view('livewire.users',
                ['users'=> $users]);
    }
}
