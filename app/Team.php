<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=[
        'school_id',
        'tm_number',
        'tm_name',
        'tm_coach',
        'tm_coachemail',
        'tm_coachphone',
    ];

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function match()
    {
        return $this->belongsTo('App\Match');

    }
    
    public function player()
    {
        return $this->hasMany('App\Player','team_id');

    }
    //
}
