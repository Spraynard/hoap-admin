<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\Participant;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Log;

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

    public function createFromParticipant($participantId)
    {
        $participant = Participant::findOrFail($participantId);

        $donor = new Donor;

        $donor->first_name = $participant->first_name;
        $donor->last_name = $participant->first_name;
        $donor->email = $participant->email;
        $donor->phone_number = $participant->phone;
        $donor->county = $participant->county;
        $donor->line_1 = $participant->line_1;
        $donor->line_2 = $participant->line_2;
        $donor->city = $participant->city;
        $donor->state = $participant->state;
        $donor->zip = $participant->zip;

        $donor->save();

        return redirect()->route('voyager.donors.show', ['donor' => $donor]);
    }
}
