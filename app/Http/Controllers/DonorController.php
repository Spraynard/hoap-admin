<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Volunteer;

class DonorController extends Controller
{
    public function createFromVolunteer($volunteerId)
    {
        $volunteer = Volunteer::findOrFail($volunteerId);

        $donor = new Donor;

        $donor->first_name = $volunteer->firstName;
        $donor->last_name = $volunteer->lastName;
        $donor->email = $volunteer->email;
        $donor->phone_number = $volunteer->phone;
        $donor->county = $volunteer->county;
        $donor->line_1 = $volunteer->line_1;
        $donor->line_2 = $volunteer->line_2;
        $donor->city = $volunteer->city;
        $donor->state = $volunteer->state;
        $donor->zip = $volunteer->zip;

        $donor->save();

        return redirect()->route('voyager.donors.show', ['donor' => $donor]);
    }
}
