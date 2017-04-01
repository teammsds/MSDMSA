  @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

          <div class="panel panel-default">
          <h3>Field Details</h3>
            <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Field Name</td>
                <td><?php echo ($field['f_name']); ?></td>
            </tr>
            <tr>
                <td>School ID</td>
                <td><?php echo ($field['f_number']); ?></td>
            </tr>
            <tr>
                <td>Street Address</td>
                <td><?php echo ($field['f_street']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($field['f_city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($field['f_state']); ?></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><?php echo ($field['f_zip']); ?></td>
            </tr>
            <tr>
                <td>Contact Name</td>
                <td><?php echo ($field['f_conname']); ?></td>
            </tr>
            <tr>
                <td>Contact E-Mail</td>
                <td><?php echo ($field['f_conemail']); ?></td>
            </tr>
            <tr>
                <td>Contact Phone</td>
                <td><?php echo ($field['f_conphone']); ?></td>
            </tr>
            <tr>
                <td>Notes</td>
                <td><?php echo ($field['f_notes']); ?></td>
            </tr>
            </tr>
            </tbody>
        </table>
         <div>
   <a href="{{url('/fields')}}" class="btn btn-primary">Back</a>
        </div>
              
</div>
</div>
</div>




@stop
