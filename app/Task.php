<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Task extends Model
{
    //
    protected $dates = [
        'deadline',
    ];

    public function post(){
        return $this->belongsTo('App\Post');
    }

}
