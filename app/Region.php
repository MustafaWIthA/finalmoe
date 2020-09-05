<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //



    public function Districts()
    {
        return $this->hasMany(District::class);
    }

    public function Projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
