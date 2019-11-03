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
                margin: 0;
                min-height: 100vh;
            }
            body {
              padding-bottom: 50px;
              background: #f2f2f2;
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
            /* Styles for form */
            .title {
              padding: 50px 0;
            }
            .card {
              min-width: 600px;
              max-width: 800px;
              margin: 0 auto;
              padding: 50px;
              box-shadow: 0 0 15px rgba(0,0,0,0.1);
              background: #fff;
            }
            .card-body {
              display: flex;
              justify-content: space-between;
            }
            .flex-col {
              width: 45%;
              display: flex;
              flex-direction: column;
              align-items: initial;
              justify-content: space-evenly;
            }
            .card label {
              display: inline-block;
              width: auto;
              text-align: left;
            }
            .card .full-width label {
              width: 100% !important;
            }
            .card input{
              max-width: 150px;
              display: inline-block;
              border: none;
              box-shadow: none;
              border-bottom: 1px solid #aaa;
              border-radius: 0;
            }
            .card input:active,
            .card input:focus {
              outline: 0;
              border: 0;
              box-shadow: none;
              border-bottom: 1px solid #F21890;
              background: #fff;
            }
            .card select {
              border: 0;
              border-bottom: 1px solid #aaa;
              background: #fff;
              -webkit-appearance: none;
              -webkit-border-radius: 0px;
              max-width: 150px;
            }
            .card textarea {
              border: 1px solid #aaa;
            }
            .card textarea:active,
            .card textarea:focus {
              outline: 0;
              box-shadow: none;
              border: 1px solid #F21890;
            }
            .card-body .form-group {
              display: flex;
              justify-content: space-between;
            }
            .submit-button input {
              max-width: unset;
              width: 100%;
            }
            @media (max-width: 767px) {
              .title {
                font-size: 60px;
              }
              .card {
                min-width: unset;
                padding: 40px;
              }
              .card-body {
                flex-direction: column;
              }
              .card .flex-col {
                width: 100%;
              }
            }  
/* End styles for form */
        </style>
    </head>
  <body>
    <div class="container">

      @include('inc.messages')
      @yield('content')
    </div>

  </body>
</html>