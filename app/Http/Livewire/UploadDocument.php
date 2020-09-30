<?php

namespace App\Http\Livewire;

use App\Document;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadDocument extends Component
{
    use WithFileUploads;

    public $document;
   public $project_id;

    public function save()
    {
        $this->validate([
            'document' => 'file|max:3024', // 1MB Max
            'project_id' => 'required',
        ]);


        //$name = $->file('avatar')->getClientOriginalName();



        $path= $this->document->store('documents');
        $name = $path;
        $type = $this->document->getClientOriginalName(); 
        $size = Storage::size($path);

        $file= new Document([
            'name' => $name,
            'project_id' => $this->project_id,
            'type' => $type,
            'size' => $size,
            ]);
        $file->save();

    }

    public function render()
    {
        return view('livewire.upload-document');
    }
}
