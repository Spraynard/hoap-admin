<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Donor;

/**
 * Model that encompasses donations, made by Donors, to the HOAP Administration.
 */
class Donation extends Model
{
	public function donor()
	{
		return $this->belongsTo(Donor::class);
	}
}
