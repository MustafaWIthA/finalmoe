<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{


      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function Project()
    {
        return $this->belongsTo(Project::class);
        
    }
}
