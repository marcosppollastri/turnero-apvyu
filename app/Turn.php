<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    public function pearson(){
        return $this->belongsTo('App\Pearson');
        
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $table = 'turns';
}
