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
<<<<<<< HEAD
                <td>Field Number</td>
                <td><?php echo ($field['f_number']); ?></td>
            </tr>
            <tr>
                <td>Field Name</td>
                <td><?php echo ($field['f_name']); ?></td>
            </tr>
            <tr>
                <td>Field Location</td>
                <td>
                    <table>
                        <tr><td><?php echo ($field['f_street']); ?></td></tr>
                        <tr><td><?php echo ($field['f_city']); ?></td></tr>
                        <tr><td><?php echo ($field['f_state']); ?></td></tr>
                        <tr><td><?php echo ($field['f_zip']); ?></td></tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>Field Owner Organization</td>
                <td><?php echo ($field['f_oworg']); ?></td>
=======
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
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
            </tr>
            <tr>
                <td>Contact Name</td>
                <td><?php echo ($field['f_conname']); ?></td>
            </tr>
            <tr>
<<<<<<< HEAD
                <td>Contact Email</td>
=======
                <td>Contact E-Mail</td>
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
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
<<<<<<< HEAD


            </tr>
            </tbody>
        </table>


=======
            </tr>
            </tbody>
        </table>
         <div>
   <a href="{{url('/fields')}}" class="btn btn-primary">Back</a>
        </div>
              
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
</div>
</div>
</div>




@stop
