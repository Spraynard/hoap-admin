<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

@extends('layouts.app')

@section('content')
  <h1>Participants</h1>
  @if( count($participants) > 0 )
    @foreach($participants as $participant)
      <div class="well">
        <h3><a href="/participants/{{ $participant->id }}">{{ $participant->first_name }}</a></h3>
      </div>
      @endforeach

  @else
    <p>No Participants found</p>
  @endif 
@endsection