<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandep extends Model
{

	
    
	 protected $table = 'demandep';

	 public function devisarticlea()
    {
        return $this->hasMany('App\Devisarticlesa');
    }

 public function client()
    {
        return $this->belongsTo('App\Clients');
    }

}
