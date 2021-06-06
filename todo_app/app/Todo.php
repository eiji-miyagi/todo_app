<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use \Rutorika\Sortable\SortableTrait;

class Todo extends Model
{
    

    public function user()
        {
           return $this->belongsTo('App\User');
       }
    
        public function goal()
       {
            return $this->belongsTo('App\Goal');
       }
    public function tags()
    {
       return $this->belongsToMany('App\Tag');
    }
}
