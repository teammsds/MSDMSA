@extends('layouts.app')
@section('content')

    <div class="container">
<<<<<<< HEAD
        <h1 style="color:gainsboro">Player Details</h1>
        <table class="table table-bordered table-hover">
            <tbody style="background-color: darkseagreen">
            <tr class="bg-info">
            <tr>
                <td>Player Number</td>
                <td><?php echo ($player['p_number']); ?></td>
            </tr>
            <tr>
                <td>Player First Name</td>
                <td><?php echo ($player['p_fname']); ?></td>
            </tr>
            <tr>
                <td>Player Last Name</td>
                <td><?php echo ($player['p_lname']); ?></td>
            </tr>
            <tr>
                <td>Player Address</td>
                <td><?php echo ($player['p_street']); ?></td>
                <td><?php echo ($player['p_city']); ?></td>
                <td><?php echo ($player['p_state']); ?></td>
                <td><?php echo ($player['p_zip']); ?></td>
                <td><?php echo ($player['p_email']); ?></td>
                <td><?php echo ($player['p_phone']); ?></td>
            </tr>
            <tr>
                <td>Eligibility Status</td>
                <td><?php echo ($player['p_estatus']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>

=======
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
<h3>Player details</h3>
        <table class="table table-bordered table-hover">
                        <tr class="bg-info">
            <tr>
                <td>Player Id</td>
                <td><?php echo ($team['p_number']); ?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo ($team['p_fname']); ?></td>
            </tr>
            <tr>
                <td>Address Street</td>
                <td><?php echo ($team['p_street']); ?></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?php echo ($team['p_city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($team['p_state']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($team['p_zip']); ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><?php echo ($team['p_email']); ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo ($team['p_phone']); ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?php echo ($team['p_status']); ?></td>
            </tr>
            
            </tr>
            </tbody>
        </table>
        <div>
   <a href="{{url('/teams')}}" class="btn btn-primary">Back</a>
        </div>
    </div>

</div>
</div>
</div>

>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
@stop
