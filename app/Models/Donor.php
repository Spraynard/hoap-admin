<?php

namespace App\Models;

use Donation;
use Illuminate\Database\Eloquent\Model;

/**
 * Model that encompasses donors to the HOAP Administration.
 */
class Donor extends Model
{
    public $additional_attributes = ['full_name'];

    public function donations()
    {
    	return $this->hasMany(Donation::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
