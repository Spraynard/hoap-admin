<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    public $additional_attributes = ['full_name'];

    /**
     * Get the timeEntries for the volunteer post.
     */
    public function timeEntries()
    {
        return $this->hasMany('App\Models\TimeEntry');
    }

    public function getFullNameAttribute()
    {
        return "{$this->firstName} {$this->lastName}";
    }
}
