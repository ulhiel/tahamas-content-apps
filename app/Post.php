<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rubrik;
use App\Task;

class Post extends Model
{
    //
    protected $dates = [
        'post_date',
    ];

    public function rubrik(){
        return $this->belongsTo('App\Rubrik');
    }

    public function tasks(){
        return $this->hasMany('App\Task');
    }
}
