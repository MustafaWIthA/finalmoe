<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //


    public function Projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
