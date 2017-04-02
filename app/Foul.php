<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foul extends Model
{
    protected $fillable=[
        'y_card',
        'r_card',
        'player_id',
    ];

    public function player()
    {
        return $this->belongsTo('App\Player');
    }


}
