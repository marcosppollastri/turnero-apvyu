<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    public function turns(){
        return $this->hasMany('App\Turn');
    }
}
