<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadDocument extends Component
{
    use WithFileUploads;

    public $document;

    public function save()
    {
        // $this->validate([
        //     'document' => 'file|max:3024', // 1MB Max
        // ]);

        $this->document->store('documents');
    }

    public function render()
    {
        return view('livewire.upload-document');
    }
}
