<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    public $additional_attributes = ['full_name'];

    /**
     * Get the timeEntries for the volunteer post.
     */
    public function timeEntries()
    {
        return $this->hasMany('App\TimeEntry');
    }

    public function getFullNameAttribute()
    {
        return "{$this->firstName} {$this->lastName}";
    }
}
