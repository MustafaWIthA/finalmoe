<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component

{

    use WithPagination;
    public function render()
    {


        $users = User::all();
        return view('livewire.users',
                ['users'=> User::paginate(1),
                
                ]);
    }
}
