<?php

namespace App\Http\Livewire;

use App\Document;
use App\Project;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadDocument extends Component
{
    use WithFileUploads;

    public $document;
    public $project_id;

    protected $rules = [
        'document' => 'file|max:3024', // 1MB Max
      //  'project_id' => 'required',
    ];


   public function updatedDocument()
    {
        $this->validate();
    }
    public function save()
    {
        $this->validate();
        $path= $this->document->store('public');
        $name = $path;
        $type = $this->document->getClientOriginalName(); 
        $size = Storage::size($path);

        $file= new Document([
            'name' => $name,
            'project_id' => 23, //$this->project_id,
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
