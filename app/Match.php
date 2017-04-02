<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable=[
        'm_number',
        'm_homeid',
        'm_guestid',
        'm_time',
        'm_date',
        'm_score',
        'm_ref_com',
        'm_homeg',
        'm_guestg',
        'field_id',
        'tournament_id',
    ];

    public function field()
    {
        return $this->belongsTo('App\Field');
    }

    public function teams()
    {
        return $this->hasMany('App\Team');
    }

    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }

}
