<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Volunteer;

class VolunteerController extends Controller
{
    public function createFromDonor($donorId)
    {
        $dnr = Donor::find($donorId);

//        echo print_r($dnr);
//        echo "</br>";

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

//        echo print_r($dataTypeContent); die;

        return view('voyager::bread.edit-add', compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }
}
