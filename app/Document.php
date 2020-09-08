<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function Project()
    {
        return $this->belongsTo(Project::class);
        
    }
}
