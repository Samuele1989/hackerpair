@extends('layouts.app')

@section('mainContent')
{!! Form::model($event,
    [
    'method' => 'put',
    'route' => ['events.update', $event],
    'class' => 'form'
    ]
    ) !!}

<div class="form-group">
    {!! Form::label('name', 'Event Name') !!} 
    {!! Form::text('name', null, ['class' => 'form-control border-secondary']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Event Description') !!} 
    {!! Form::textarea('description', null, ['class' => 'form-control border-secondary'])
    !!}
</div>
<div class="form-group">
    {!! Form::submit('Update Event', ['class' => 'btn btn-primary ']) !!}
</div>
{!! Form::close() !!}
@endsection