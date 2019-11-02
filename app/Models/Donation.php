<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Donor;

class Donation extends Model
{
	public function donor()
	{
		return $this->belongsTo(Donor::class);
	}
}
