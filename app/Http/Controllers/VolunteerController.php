<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\Participant;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function createFromDonor($donorId)
    {
        $dnr = Donor::findOrFail($donorId);
        
        $vol = new Volunteer;

        $vol->firstName = $dnr->first_name;
        $vol->lastName = $dnr->last_name;
        $vol->email = $dnr->email;
        $vol->phone = $dnr->phone_number;
        $vol->county = $dnr->county;
        $vol->line_1 = $dnr->line_1;
        $vol->line_2 = $dnr->line_2;
        $vol->city = $dnr->city;
        $vol->state = $dnr->state;
        $vol->zip = $dnr->zip;

        $dataType = \TCG\Voyager\Models\DataType::where('slug', '=', 'volunteers')->first();

        $dataTypeContent = $vol;

        $isModelTranslatable = false;

        return view('voyager::bread.edit-add', compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }

    public function createFromParticipant($participantId)
    {
        $participant = Participant::findOrFail($participantId);
        
        $vol = new Volunteer;

        $vol->firstName = $participant->first_name;
        $vol->lastName = $participant->last_name;
        $vol->email = $participant->email;
        $vol->phone = $participant->phone_number;
        $vol->county = $participant->county;
        $vol->line_1 = $participant->line_1;
        $vol->line_2 = $participant->line_2;
        $vol->city = $participant->city;
        $vol->state = $participant->state;
        $vol->zip = $participant->zip;

        $dataType = \TCG\Voyager\Models\DataType::where('slug', '=', 'volunteers')->first();

        $dataTypeContent = $vol;

        $isModelTranslatable = false;

        return view('voyager::bread.edit-add', compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }
}
