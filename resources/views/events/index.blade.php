<ul>
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
</ul>