<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //




    public function Districts()
    {
        return $this->hasMany(District::class);
    }
    public function Agencies()
    {
        return $this->belongsToMany(Agency::class);
    }
    public function Regions()
    {
        return $this->belongsToMany(Region::class);
    }


  
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('title','like','%'.$val.'%')
        ->Orwhere('type','like','%'.$val.'%')
        ;

    }


    protected $dates = [
        'start_date','end_date',
    ];
}
