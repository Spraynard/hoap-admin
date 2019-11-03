@extends('layouts.app')

@section('content')
<p>There was a failure with submitting your request. You may already have submitted a request to the server</p>
<p>If you do not redirect back to HOAPINC.com after 5 seconds, please use <a href="{{config('app.hoap_main')}}">this link</a> to go back to HOAPINC</p>
<script type="text/javascript">
	window.setTimeout(function() {
		window.location.replace("{{config('app.hoap_main')}}");
	}, 5000);
</script>
@endsection