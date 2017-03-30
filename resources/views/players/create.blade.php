@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
<h3> New Player</h3>
    {!! Form::open(['url' => 'teams']) !!}

    <div class="form-group">
        {!! Form::select('school_id', $schools) !!}
    </div>
    <div class="form-group">
        {!! Form::select('team_id', $teams) !!}
    </div>

    <div class="form-group">
        {!! Form::label('p_number', 'Player Number:') !!}
        {!! Form::text('p_number',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pf_name', 'First Name:') !!}
        {!! Form::text('pf_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pl_name', 'Last Name:') !!}
        {!! Form::text('pl_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_street', 'Street:') !!}
        {!! Form::text('p_street',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_city', 'City:') !!}
        {!! Form::text('p_city',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_state', 'State') !!}
        {!! Form::text('p_state',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_zip', 'Zip') !!}
        {!! Form::text('p_zip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_email', 'E-mail') !!}
        {!! Form::text('p_email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_phone', 'Phone') !!}
        {!! Form::text('p_phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_estatus', 'Status') !!}
        {!! Form::text('p_estatus',null,['class'=>'form-control']) !!}
    </div>
    

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>

@stop
