<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devisarticlesa extends Model
{
    protected $table = 'devisarticlesa';

    public function article()
    {
        return $this->belongsTo('App\Articles');
    }
}
