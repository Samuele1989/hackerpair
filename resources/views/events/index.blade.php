{{-- <ul>
    @forelse ($events as $event)
    <li>{{$event}}</li>
    @empty
    <li>No events available</li>
    @endforelse

    <table>
        @foreach($events as $event)
            @include('partials._row', ['event' => $event])
        @endforeach
    </table>
</ul> --}}
@extends('layouts.app')

@section('content')
Events
@endsection

@section('mainContent')
<ul>
@forelse ($events as $event)
    <li>
        {{ $event->name }}
    </li>
@empty
    <li>
        No events found!
    </li>
@endforelse
</ul>
{{ $events->links('vendor.pagination.bootstrap-4') }}
@endsection