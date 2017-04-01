@extends('layouts.app')
@section('content')

    <div class="container">
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

@stop
