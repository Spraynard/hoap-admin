<?php

namespace App\Models;

use Donation;
use Illuminate\Database\Eloquent\Model;

/**
 * Model that encompasses donors to the HOAP Administration.
 */
class Donor extends Model
{
    public function donations()
    {
    	return $this->hasMany(Donation::class);
    }
}
