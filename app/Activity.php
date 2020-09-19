<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //


    public function Project()
    {
        return $this->belongsTo(Project::class);
        
    }

    public function State()
    {
        return $this->belongsTo(State::class);
        
    }
    

    protected $dates = [
        'start_date','end_date',
    ];
}
