<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
 protected $table = 'devis';

 public function devisarticle()
    {
        return $this->hasMany('App\Devisarticles');
    }

 public function client()
    {
        return $this->belongsTo('App\Clients');
    }


    

}
