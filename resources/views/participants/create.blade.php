@extends('layouts.app')

@section('content')
        <div class="content">
          <div class="title m-b-md">
            New Participant
          </div>
          <div class="card">
            <div class="card-body">
                {!! Form::open(['action' => 'ParticipantController@store', 'method' => 'POST']) !!}
                  <!-- First Name -->
                  <div class="form-group">
                    {{ Form::label('first_name', 'First Name') }}
                    {{ Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Last Name -->
                <div class="form-group">
                    {{ Form::label('last_name', 'Last Name') }}
                    {{ Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Date of Birth -->
                <div class="form-group">
                    {{ Form::label('dob', 'Date of Birth') }}
                    {{ Form::date('dob', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Gender -->
                <div class="form-group">
                    {{ Form::label('gender', 'Gender') }}
                    {{ Form::select('gender', ['male' => 'Male', 'female' => 'Female', 'other' => 'Other']) }}
                </div>
                <!-- Email -->
                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Phone -->
                <div class="form-group">
                    {{ Form::label('phone', 'Phone') }}
                    {{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- OK to Text -->
                <div class="form-group">
                    {{ Form::label('ok_to_text', 'Okay to text?') }}
                    {{ Form::checkbox('ok_to_text', '', ['class' => 'form-control', 'placeholder' => '', 'value'=>false]) }}
                </div>
                <!-- Last Grad Completed? -->
                <div class="form-group">
                    {{ Form::label('last_grade_completed', 'Last grade completed?') }}
                    {{ Form::select('last_grade_completed', ['1st' => '1st', '2nd' => '2nd', '3rd' => '3rd', '4th' => '4th', '5th' => '5th', '6th' => '6th', '7th' => '7th', '8th' => '8th', '9th' => '9th', '10th' => '10th', '11th' => '11th', '12th' => '12th']) }}
                </div>
                <!-- Employment -->
                <div class="form-group">
                    {{ Form::label('employment_status', 'Employment Status') }}
                    {{ Form::select('employment_status', ['employed' => 'Employed', 'unemployed' => 'Unemployed']) }}
                </div>
                <!-- Income -->
                <div class="form-group">
                    {{ Form::label('annual_income', 'Annual Income') }}
                    {{ Form::number('annual_income', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Children -->
                <div class="form-group">
                    {{ Form::label('number_of_children', 'Number of Children') }}
                    {{ Form::number('number_of_children', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- How Did You Hear -->
                <div class="form-group">
                    {{ Form::label('referrer', 'How did you hear about us?') }}
                    {{ Form::textarea('referrer', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <div class="submit-button">
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                </div>
                {!! Form::close() !!}
                </div> <!-- End Card Body -->
            </div> <!-- End Card Body -->
        </div> <!-- End content -->
@endsection