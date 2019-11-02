<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

@extends('layouts.app')

@section('content')
  <h1>Applicants</h1>
  @if( count($applicants) > 0 )
    @foreach($applicants as $applicant)
      <div class="well">
        <h3><a href="/applicants/{{ $applicant->id }}">{{ $applicant->firstname }}</a></h3>
      </div>
      @endforeach

  @else
    <p>No Applicants found</p>
  @endif 
@endsection