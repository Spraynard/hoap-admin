<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeEntry extends Model
{
    /**
     * Get the volunteer
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Models\Volunteer');
    }
}
