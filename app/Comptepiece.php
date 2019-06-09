<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptepiece extends Model
{
	 protected $table = 'comptepiece';

	  public function compte()
    {
        return $this->belongsTo('App\Compte');
    }

     public function client()
    {
        return $this->belongsTo('App\Clients');
    }
}
