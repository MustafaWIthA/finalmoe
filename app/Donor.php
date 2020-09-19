<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    //


    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
