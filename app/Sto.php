<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sto extends Model
{
    protected $table = "sto";
    public $timestamps = false;

    public function rezervacija()
    {
        return $this->hasOne('App\Rezervacija', 'sto_id', 'id');
    }
}
