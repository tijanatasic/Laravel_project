<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gost extends Model
{
    protected $table = "gost";
    public $timestamps = false;

    public function rezervacija()
    {
        return $this->hasOne('App\Rezervacija', 'gost_id', 'id');
    }
}
