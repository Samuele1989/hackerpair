{{-- Output the $id variable. --}}
@extends('layouts.app')

@section('mainContent')
    <h1 class="font-weight-bolder">{{ $event->name }}</h1>

    <p>City: {{ $event->city }}
    Venue: {{ $event->venue }}
    </p>

    <h2>Description</h2>
    <p>{{ $event->description }}</p>


@endsection