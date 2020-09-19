<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $guarded = [];




    public function Districts()
    {
        return $this->belongsToMany(District::class)->withTimestamps();;
    }
    public function Documents()
    {
        return $this->hasMany(Document::class);
    }
    public function Activities()
    {
        return $this->hasMany(Activity::class);
    }
    public function Agencies()
    {
        return $this->belongsToMany(Agency::class)->withTimestamps();;
    }
    public function Donors()
    {
        return $this->belongsToMany(Donor::class)->withTimestamps();;
    }
    public function Regions()
    {
        return $this->belongsToMany(Region::class)->withTimestamps();;
    }
    public function User()
    {
        return $this->belongsTo(User::class);
        
    }
    public function Priorities()
    {
        return $this->belongsToMany(Priority::class)->withTimestamps();;
    }
    public function Sectors()
    {
        return $this->belongsToMany(Sector::class)->withTimestamps();;
    }
    public function Type()
    {
        return $this->belongsTo(Type::class);
    }
    public function State()
    {
        return $this->belongsTo(State::class);
    }



  
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('title','like','%'.$val.'%')
        ;

    }




    protected $dates = [
        'start_date','end_date',
    ];
}
