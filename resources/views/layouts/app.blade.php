<!doctype html>
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
    @include('inc.navbar')
    <div class="container">

      @include('inc.messages')
      @yield('content')
    </div>

  </body>
</html>