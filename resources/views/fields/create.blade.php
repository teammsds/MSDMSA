@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
<<<<<<< HEAD
<h3> New Field</h3>
{!! Form::open(['url' => 'fields']) !!}

<div class="form-group">
    {!! Form::label('f_number', 'Field Number:') !!}
    {!! Form::text('f_number',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_name', 'Field Name:') !!}
    {!! Form::text('f_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_street', 'Street:') !!}
    {!! Form::text('f_street',null,['class'=>'form-control']) !!}
=======
<h3> Add New Field</h3>
{!! Form::open(['url' => 'fields']) !!}
<div class="form-group">
    {!! Form::label('f_name', 'Name:') !!}
    {!! Form::text('f_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_number', 'Field ID:') !!}
    {!! Form::text('f_number',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_street', 'Street Address:') !!}
    {!! Form::text('f_ftreet',null,['class'=>'form-control']) !!}
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
</div>
<div class="form-group">
    {!! Form::label('f_city', 'City:') !!}
    {!! Form::text('f_city',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
<<<<<<< HEAD
    {!! Form::label('f_state', 'State:') !!}
    {!! Form::text('f_state',null,['class'=>'form-control']) !!}
=======
    {!! Form::label('f_ftate', 'State:') !!}
    {!! Form::text('f_ftate',null,['class'=>'form-control']) !!}
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
</div>
<div class="form-group">
    {!! Form::label('f_zip', 'Zip:') !!}
    {!! Form::text('f_zip',null,['class'=>'form-control']) !!}
</div>
<<<<<<< HEAD
                    <div class="form-group">
                        {!! Form::label('f_oworg', 'Owner Organization:') !!}
                        {!! Form::text('f_oworg',null,['class'=>'form-control']) !!}
                    </div>
=======
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
<div class="form-group">
    {!! Form::label('f_conname', 'Contact Name:') !!}
    {!! Form::text('f_conname',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
<<<<<<< HEAD
    {!! Form::label('f_conemail', 'Contact Email:') !!}
=======
    {!! Form::label('f_oworg', 'Owner:') !!}
    {!! Form::text('f_oworg',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_conemail', 'Contanct E-Mail:') !!}
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
    {!! Form::text('f_conemail',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('f_conphone', 'Contact Phone:') !!}
    {!! Form::text('f_conphone',null,['class'=>'form-control']) !!}
</div>
<<<<<<< HEAD
                    <div class="form-group">
                        {!! Form::label('f_notes', 'Notes:') !!}
                        {!! Form::text('f_notes',null,['class'=>'form-control']) !!}
                    </div>
=======
<div class="form-group">
    {!! Form::label('f_notes', 'Field Notes') !!}
    {!! Form::text('f_notes',null,['class'=>'form-control']) !!}
</div>
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

</div>
</div>
</div>
</div>
@stop
