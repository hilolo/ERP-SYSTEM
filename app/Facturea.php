<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturea extends Model
{
      protected $table = 'facturea';

       public function demandep()
    {
        return $this->belongsTo('App\Demandep');
    }

}
