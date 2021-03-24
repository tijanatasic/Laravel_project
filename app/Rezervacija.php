<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    protected $table = "rezervacija";
    public $timestamps = false;

    public function gost()
    {
        return $this->belongsTo('App\Gost', 'gost_id', 'id');
    }
    public function sto()
    {
        return $this->belongsTo('App\Sto', 'sto_id', 'id');
    }
}
