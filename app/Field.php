<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable=[
        'f_number',
        'f_name',
        'f_street',
        'f_city',
        'f_state',
        'f_zip',
<<<<<<< HEAD
        'f_oworg',
=======
        'f_oworg,',
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
        'f_conname',
        'f_conemail',
        'f_conphone',
        'f_notes',
    ];

<<<<<<< HEAD
    public function matches()
    {
        return $this->hasMany('App\Match');

    }

=======
    public function teams()
    {
        return $this->hasMany('App\Team');

    }

    public function players()
    {
        return $this->hasMany('App\Player');

    }

    public function schools()
    {
        return $this->hasMany('App\School');

    }
    //
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
}
