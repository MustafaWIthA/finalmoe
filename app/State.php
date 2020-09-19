<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //


    public function Projects()
    {
        return $this->hasMany(Project::class);
    }
}
