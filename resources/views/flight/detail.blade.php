@extends('index')
@section('content')
<form action="{{ route('flight.index') }}" method="GET">
    @csrf
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<form>
	<div class="form-group has-success">
    	
        <label style="padding-top:10px; width: 40%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="route_id" class="control-label">route_id:   {{ $flights->route_id }}</label><br>
        <label style="padding-top:10px; width: 40%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="dateDeparture" class="control-label">date_Departure:   {{ $flights->dateDeparture }}</label><br>
        <label style="padding-top:10px; width: 40%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="dateArrival" class="control-label">date_Arrival:   {{ $flights->dateArrival }}</label><br>
        
        <button type="submit" class="btn btn-primary">Back</button>
</form>
@endsection