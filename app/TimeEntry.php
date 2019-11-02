<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeEntry extends Model
{
    /**
     * Get the volunteer
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
