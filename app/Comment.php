<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $table = 'comments';
     public $timestamps = false;



   public function author()
   {
       return $this->belongsTo('App\Post','post_id');
   }

}
