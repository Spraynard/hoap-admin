<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }

    public function children()
    {
        return $this->hasMany(Children::class);
    }
}
