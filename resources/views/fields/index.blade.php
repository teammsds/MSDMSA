@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
<<<<<<< HEAD
                    <h4 style= "color: black">Fields</h4>
                      <a href="{{url('/fields/create')}}" class="btn btn-success">Enter New Field Details</a>
=======
                    <h4 style= "color: black">Fields registered with MSA</h4>
                      <a href="{{url('/fields/create')}}" class="btn btn-success">Add New Field</a>
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
                      </div>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
<<<<<<< HEAD
            <th>Field Number</th>
            <th>Field Name</th>
            <th>Field Address</th>
            <th>Field Owner Organization</th>
			<th>Contact Name</th>
            <th>Contact Email</th>
			<th>Contact Phone</th>
            <th>Description</th>
=======
            <th>Name</th>
            <th>Field Id</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Owner</th>
            <th>Contact Name</th>
            <th>Contact Email</th>
            <th>Contact Phone</th>
            <th>Field Notes</th>
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($fields as $field)
            <tr>
<<<<<<< HEAD
                <td>{{ $field->f_number }}</td>
                <td>{{ $field->f_name }}</td>
                <td>
                    <table>
                        <tr><td>{{ $field->f_street }}</td></tr>
                        <tr><td>{{ $field->f_city }}</td></tr>
                        <tr><td>{{ $field->f_state }}</td></tr>
                        <tr><td>{{ $field->f_zip }}</td></tr>
                        </table>
                </td>
=======
                
                <td>{{ $field->f_name }}</td>
                <td>{{ $field->f_number }}</td>
                <td>{{ $field->f_street }}</td>
                <td>{{ $field->f_city }}</td>
                <td>{{ $field->f_state }}</td>
                <td>{{ $field->f_zip }}</td>
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
                <td>{{ $field->f_oworg }}</td>
                <td>{{ $field->f_conname }}</td>
                <td>{{ $field->f_conemail }}</td>
                <td>{{ $field->f_conphone }}</td>
                <td>{{ $field->f_notes }}</td>
                <td><a href="{{url('fields',$field->id)}}" class="btn btn-primary">View</a></td>
<<<<<<< HEAD
                <td><a href="{{route('fields.edit',$field->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['fields.destroy', $field->id]]) !!}
=======
                <td><a href="{{route('fields.edit',$field->id)}}" class="btn btn-warning">Update</a>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['fields.destroy', $field->id],'onsubmit' => 'return confirm("Are you sure you want to delete?")']) !!}
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
            </div>
        </div>
    </div>
</div>
@endsection


