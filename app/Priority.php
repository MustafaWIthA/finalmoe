<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    //

    public function Projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
