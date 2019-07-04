<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pearson extends Model
{
    public function turns(){
        return $this->hasMany('App\Turn');
    }
    protected $table = 'people';
}
