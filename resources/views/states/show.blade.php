@extends('layouts.app')

@section('mainContent')
    <h1 class="font-weight-bolder"> Events in {{ $state->name }}</h1>
    <div class="list-group list-group-flush" style='margin-bottom:2px' >
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
@endsection