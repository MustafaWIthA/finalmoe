<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //


    public function Region()
    {
        return $this->belongsTo(Region::class);
    }

    public function Projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
