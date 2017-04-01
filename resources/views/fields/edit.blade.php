@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
<h3>Update Field Information</h3>
{!! Form::model($field,['method' => 'PATCH','route'=>['fields.update',$field->id]]) !!}
<div class="form-group">
    {!! Form::label('f_name', 'Name:') !!}
    {!! Form::text('f_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_number', 'School ID:') !!}
    {!! Form::text('f_number',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_street', 'Street Address:') !!}
    {!! Form::text('f_street',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_city', 'City:') !!}
    {!! Form::text('f_city',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_state', 'State:') !!}
    {!! Form::text('f_state',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_zip', 'Zip:') !!}
    {!! Form::text('f_zip',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_conname', 'Contact Name:') !!}
    {!! Form::text('f_conname',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_conemail', 'Contact E-Mail:') !!}
    {!! Form::text('f_conemail',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_conphone', 'Contact Phone:') !!}
    {!! Form::text('f_conphone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_notes', 'Notes:') !!}
    {!! Form::text('f_notes',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
</div>
</div>
{!! Form::close() !!}
@stop
