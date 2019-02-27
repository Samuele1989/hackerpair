@extends('layouts.app')

@section('mainContent')
<p class='font-weight-bold'>Ops! Event not found.</p>
<p class='font-weight-bold'>See <a href="{{ route('locations.index') }}">Event Locations</a> or
<a href="{{ route('events.index') }}">Events</a></p>
    
@endsection