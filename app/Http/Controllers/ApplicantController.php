<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
// use DB;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Applicant::orderBy('created_at', 'asc')->get();
        // return Applicant::where('firstname', 'Jane')->get();
        // If using DB
        // $applicants = DB::select(SELECT * FROM applicants);
        // $applicants = Applicant::orderBy('created_at', 'asc')->paginate(10);
        return view('applicants.index')->with('applicants', $applicants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('applicants.create');
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
            'firstname'=>'required',
            'lastname'=>'required',
            'dob'=>'required'

        ]);

        // Create our new Applicant
        $applicant = new Applicant;

        $applicant->title = $request->input('title') ? $request->input('title') : "";
        $applicant->firstname = $request->input('firstname') ? $request->input('firstname') : "";
        $applicant->lastname = $request->input('lastname') ? $request->input('lastname') : "";
        $applicant->dob = $request->input('dob') ? $request->input('dob') : "";
        $applicant->gender = $request->input('gender') ? $request->input('gender') : "";
        $applicant->email = $request->input('email') ? $request->input('email') : "";
        $applicant->phone = $request->input('phone') ? $request->input('phone') : "";
        $applicant->text = $request->input('text') ? $request->input('text') : "";
        $applicant->grade = $request->input('grade') ? $request->input('grade') : "";
        $applicant->employment = $request->input('employment') ? $request->input('employment') : "";
        $applicant->income = $request->input('income') ? $request->input('income') : "";
        $applicant->children = $request->input('children') ? $request->input('children') : "";
        $applicant->howdidyouhear = $request->input('howdidyouhear') ? $request->input('howdidyouhear') : "";

        $applicant->save();


        return redirect('/applicants')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applicant = Applicant::find($id);
        return view('applicants.show')->with('applicant', $applicant);
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
