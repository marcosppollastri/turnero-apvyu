<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pearson extends Model
{
    public function turn(){
        return $this->belongsTo('App\Turn');
    }
    protected $table = 'people';
}
