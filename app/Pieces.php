<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieces extends Model
{
     protected $table = 'pieces';

      public function comptepiece()
    {
        return $this->hasMany('App\Comptepiece');
    }


}
