@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
<h3> New Match</h3>
{!! Form::open(['url' => 'matches']) !!}
                    <div class="form-group">
                        {!! Form::select('field_id', $fields) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::select('tournament_id', $tournaments) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::select('m_homeid', $teams) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::select('m_guestid', $teams) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::select('referee1_id', $referees) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::select('referee2_id', $referees) !!}
                    </div>
<div class="form-group">
    {!! Form::label('m_number', 'Match Number:') !!}
    {!! Form::text('m_number',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('m_date', 'Date:') !!}
    {!! Form::text('m_date',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('m_time', 'Time:') !!}
    {!! Form::text('m_time',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('m_score', 'Score:') !!}
    {!! Form::text('m_score',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('m_ref_com', 'Referee Comments:') !!}
    {!! Form::text('m_ref_com',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('m_homeg', 'Home Goals:') !!}
    {!! Form::text('m_homeg',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('m_guestg', 'Guest Goals:') !!}
    {!! Form::text('m_guestg',null,['class'=>'form-control']) !!}
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
