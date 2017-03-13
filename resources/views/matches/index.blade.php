<!doctype html>
<html>
<h1>Match Detail</h1>
<h2>Result</h2>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr class="bg-info">
			<th>Home Team</th>
			<th>Score</th>
			<th>Guest Team</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($matches as $match)
		<tr>
			<td>{{ $match->m_homeid}}</td>
			<td>{{ $matches->m_score}}</td>	//I am not sure whether this will work or not.
			<td>{{ $match->m_guestid}}</td>
		</tr>
	</tbody>
</table>


<h2>Player</h2>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr class="bg-info">
        <th>Home player No. </th>
        <th>Player first name </th>
        <th>Player last name </th>
        <th colspan="2">Detial </th>
        <th>Guest player No. </th>
        <th>Player first name </th>
        <th>Player last name </th>
        
    </tr>
    </thead>
    <tbody>
    	@foreach ($matches->players as $player)
    	<tr>
    		<td><a href="{{url('players',$player->id)}}" class="btn btn-primary">{{ $player->p_number }}</a></td>
    		<td>{{ $player->p_fname }}</td>
    		<td>{{ $player->p_lname }}</td>
			<td><a href="{{url('players',$player->id)}}" class="btn btn-primary">Home player detial</a></td>
			<td><a href="{{url('players',$player->id)}}" class="btn btn-warning">Guest player detial</a></td>
			<td><a href="{{url('players',$player->id)}}" class="btn btn-primary">{{ $player->p_number }}</a></td>
    		<td>{{ $player->p_fname }}</td>
    		<td>{{ $player->p_lname }}</td>
    	</tr>
    </tbody>
</table>



<h2>Other information</h2>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr class="bg-info">
        <th>Referee commonts</th>
    </tr>
    </thead>
    <tbody>
    	@foreach ($matches as $match)
    	<tr>
    		<td>{{ $match->m_ref_com }}</td>
    	</tr>
    </tbody>
</table>