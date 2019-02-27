{{-- Output the $id variable. --}}
@extends('layouts.app')

@section('mainContent')
    <h1 class="font-weight-bolder">{{ $event->name }}</h1>

    <p>City: {{ $event->city }}
    Venue: {{ $event->venue }}
    </p>

    <h2>Description</h2>
    <p>{{ $event->description }}</p>

    <h2>Event creation date</h2>
    <p>{{ $event->created_at->format('F d, Y') }}</p>

    <div class="button-container">
            <a href="{{ route('events.edit', $event ) }}"><button class="btn btn-warning">Edit Event</button>
            </a>
                {!! Form::open(
                    [
                    'route' => ['events.destroy', $event],
                    'method' => 'delete',
                    'class' => 'd-inline'
                    ]) !!}

                    {!! Form::submit('Delete Event', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
    </div>


@endsection