<?php

namespace App\Http\Controllers;
use App\Models\Participant;


use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $participants = Participant::orderBy('created_at', 'asc')->get();
        // // return Participant::where('firstname', 'Jane')->get();
        // // If using DB
        // // $participants = DB::select(SELECT * FROM participants);
        // // $participants = Participant::orderBy('created_at', 'asc')->paginate(10);
        // return view('participants.index')->with('participants', $participants);
    }

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
            'last_name'=>'required'

        ]);

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
        $participant->annual_income = $request->input('annual_income') ? $request->input('annual_income') : "";
        $participant->number_of_children = $request->input('number_of_children') ? $request->input('number_of_children') : "";
        $participant->referrer = $request->input('referrer') ? $request->input('referrer') : "";

        $participant->save();


        return redirect('/participants')->with('success', 'Participant Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $participant = Participant::find($id);
        // return view('participants.show')->with('participant', $participant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
