<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Project;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Projects extends Component
{


    use WithPagination;

    public $perPage = 10;
    public $sortField='title';
    public $sortAsc = true;
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
        $projects = Project::query()
            ->search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
            return view('livewire.projects',[
                        'projects'=> $projects
                        ]);
    }
}
