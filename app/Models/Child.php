<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public function Participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
