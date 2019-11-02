<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOAP Applicant Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .title {
              padding: 100px 0 50px;
            }
            .card {
              display: flex;
              justify-content: center;
            }
            .card-body {
              max-width: 400px;
              display: flex;
              justify-content: space-between;
            }
            .card-body label {
              display: inline-block;
              width: auto;
              text-align: left;
            }
            .card-body input{
              max-width: 300px;
              display: inline-block;
            }
            .card-body .form-group {
              display: flex;
              justify-content: space-between;
            }
            .submit-button input {
              max-width: unset;
              width: 100%;
            }
        </style>
    </head>
    <body>


        <div class="content">
          <div class="title m-b-md">
            New Applicant
          </div>
          <div class="card">
            <div class="card-body">
                {!! Form::open(['url' => 'foo/bar']) !!}
                <!-- Form Title -->
                <div class="form-group md-form">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                  <!-- First Name -->
                  <div class="form-group">
                    {{ Form::label('firstname', 'First Name') }}
                    {{ Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Last Name -->
                <div class="form-group">
                    {{ Form::label('lastname', 'Last Name') }}
                    {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Date of Birth -->
                <div class="form-group">
                    {{ Form::label('dob', 'Date of Birth') }}
                    {{ Form::date('dob', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Gender -->
                <div class="form-group">
                    {{ Form::label('gender', 'Gender') }}
                    {{ Form::select('gender', ['M' => 'Male', 'F' => 'Female', 'O' => 'Other']) }}
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
                    {{ Form::label('text', 'Okay to text?') }}
                    {{ Form::checkbox('text', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Last Grad Completed? -->
                <div class="form-group">
                    {{ Form::label('grade', 'Last grade completed?') }}
                    {{ Form::select('grade', ['1st' => '1st', '2nd' => '2nd', '3rd' => '3rd', '4th' => '4th', '5th' => '5th', '6th' => '6th', '7th' => '7th', '8th' => '8th', '9th' => '9th', '10th' => '10th', '11th' => '11th', '12th' => '12th']) }}
                </div>
                <!-- Employment -->
                <div class="form-group">
                    {{ Form::label('employment', 'Employment Status') }}
                    {{ Form::select('employment', ['full-time' => 'Full Time', 'part-time' => 'Part Time', 'not-employed' => 'Not Employed']) }}
                </div>
                <!-- Income -->
                <div class="form-group">
                    {{ Form::label('income', 'Annual Income') }}
                    {{ Form::number('income', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- Children -->
                <div class="form-group">
                    {{ Form::label('children', 'Number of Children') }}
                    {{ Form::number('children', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <!-- How Did You Hear -->
                <div class="form-group">
                    {{ Form::label('howdidyouhear', 'How did you hear about us?') }}
                    {{ Form::textarea('howdidyouhear', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
                <div class="submit-button">
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                </div>
                {!! Form::close() !!}
                </div> <!-- End Card Body -->
            </div> <!-- End Card Body -->
        </div> <!-- End content -->
    </body>
</html>
