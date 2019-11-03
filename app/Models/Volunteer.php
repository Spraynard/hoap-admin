<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TimeEntry;

class Volunteer extends Model
{
    public $additional_attributes = ['full_name'];

    /**
     * Get the timeEntries for the volunteer post.
     */
    public function timeEntries()
    {
        return $this->hasMany(TimeEntry::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->firstName} {$this->lastName}";
    }
}
