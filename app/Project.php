<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //


    public function Regions()
    {
        return $this->hasMany(Region::class);
    }




    protected $dates = [
        'start-date','end-date',
    ];
}
