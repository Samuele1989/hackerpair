@extends('layouts.app') 
@section('mainContent')

<div class="row">
    <div class="col">
        {!! Form::open(['route' => 'events.store'], ['class' => 'form']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Event Name', ['class' => 'control-label']) !!} {!! Form::text('name', null, [ 'class' => 'form-control
            input-lg border-secondary', 'placeholder' => 'PHP Hacking and Pizza' ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('city', 'City', ['class' => 'control-label']) !!} {!! Form::text('city', null, [ 'class' => 'form-control
            border-secondary input-lg', 'placeholder' => 'New York' ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('venue', 'Venue', ['class' => 'control-label']) !!} {!! Form::text('venue', null, [ 'class' => 'form-control
            border-secondary input-lg', 'placeholder' => 'Central Park' ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', "Description", ['class' => 'control-label']) !!} {!! Form::textarea('description', null, [
            'class' => 'form-control border-secondary input-lg', 'placeholder' => 'Describe the event' ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('state_id', "State", ['class' => 'control-label']) !!} {!! Form::select('state_id', \App\State::orderBy('name',
            'asc')->pluck('name', 'id'), null, ['class' => 'form-control border-secondary input-lg']); !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Event', ['class' => 'btn btn-info btn-lg', 'style' => 'width:100%']) !!}
        </div>

        {!! Form::close() !!}
        
    </div>
</div>
@endsection