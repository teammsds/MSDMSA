<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=[
        'tm_number',
        'tm_name',
        'tm_coach',
        'tm_coachemail',
        'tm_coachphone',
    ];

    public function schools()
    {
        return $this->belongsTo('App\School');
    }

    
    public function players()
    {
        return $this->hasMany('App\Player','team_id');

    }
    //
}
