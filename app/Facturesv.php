<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturesv extends Model
{
   
      protected $table = 'facturesv';

       public function devis()
    {
        return $this->belongsTo('App\Devis');
    }

}
