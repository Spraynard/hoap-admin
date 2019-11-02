<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    public $additional_attributes = ['full_name'];

    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }

    public function children()
    {
        return $this->hasMany(Children::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
