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
<div class="list-group list-group-flush mb-2"  >
@forelse ($events as $event)
    <a href= {{ route('events.show', $event) }} class="list-group-item list-group-item-action">
        {{ $event->name }}
    </a>
@empty
    <li>
        No events found!
    </li>
@endforelse
</div>
{{ $events->links('vendor.pagination.bootstrap-4') }}
<a href={{ route('events.create') }} class="btn btn-info">Add new Event</a>
@endsection