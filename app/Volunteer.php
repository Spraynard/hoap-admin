<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    /**
     * Get the timeEntries for the volunteer post.
     */
    public function timeEntries()
    {
        return $this->hasMany('App\TimeEntry');
    }
}
