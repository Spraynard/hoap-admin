<?php

namespace App\Http\Controllers;
use App\Models\Participant;
use Illuminate\Support\Facades\Mail;
use App\Mail\ParticipantFormSubmission;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('participants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'=>'required',
            'last_name'=>'required',
            'number_of_children' => 'required|numeric',
            'dob' => 'required|date',
            'phone' => 'required'

        ]);

        if ( Participant::where('first_name', $request->input('first_name'))
                        ->where('last_name', $request->input('last_name'))
                        ->where('email', $request->input('email'))->first() )
        {
            return view('submissions.failure_splash');
        }

        // Create our new Participant
        $participant = new Participant;

        $participant->first_name = $request->input('first_name') ? $request->input('first_name') : "";
        $participant->last_name = $request->input('last_name') ? $request->input('last_name') : "";
        $participant->dob = $request->input('dob') ? $request->input('dob') : "";
        $participant->gender = $request->input('gender') ? $request->input('gender') : "";
        $participant->email = $request->input('email') ? $request->input('email') : "";
        $participant->phone = $request->input('phone') ? $request->input('phone') : "";
        $participant->ok_to_text = $request->input('ok_to_text') ? true : false;
        $participant->last_grade_completed = $request->input('last_grade_completed') ? $request->input('last_grade_completed') : "";
        $participant->employment_status = $request->input('employment_status') ? $request->input('employment_status') : "";
        $participant->annual_income = $request->input('annual_income') ? (double) $request->input('annual_income') : null;
        $participant->number_of_children = $request->input('number_of_children') ? $request->input('number_of_children') : "";
        $participant->referrer = $request->input('referrer') ? $request->input('referrer') : "";

        $saved = $participant->save();

        if( $saved )
        {
            Mail::send(new ParticipantFormSubmission($participant));
        }

        return view('submissions.success_splash');
    }
}
