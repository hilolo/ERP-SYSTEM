<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devisarticles extends Model
{
   protected $table = 'devisarticles';

   public function article()
    {
        return $this->belongsTo('App\Articles');
    }

    
}
