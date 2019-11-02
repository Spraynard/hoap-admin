<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function participants()
    {
        return $this->belongsToMany(Participant::class);
    }
}
