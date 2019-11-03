<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Volunteer;

class TimeEntry extends Model
{
    /**
     * Get the volunteer
     */
    public function volunteer()
    {
        return $this->belongsTo(Volunteer::class);
    }
}
