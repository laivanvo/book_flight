@extends('index')
@section('content')
<form action="{{ route('passenger.index',$passengers->id) }}" method="GET">
    @csrf
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<form>
	<div class="form-group has-success">

        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="name" class="control-label">bill:   {{ $passengers->bill_id }}</label><br>
    	
        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="name" class="control-label">Name:   {{ $passengers->name_passenger }}</label><br>
        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="name" class="control-label">CMND:   {{ $passengers->CMND }}</label><br>
        
        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="name" class="control-label">Phone:   {{ $passengers->phone }}</label><br>
       
		<label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="name" class="control-label">Age:  {{ $passengers->age }}</label><br>
        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="name" class="control-label">Gender:   {{ $passengers->gender }}</label><br>
        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="name" class="control-label">Nationality:   {{ $passengers->nationality }}</label><br>
    <button type="submit" class="btn btn-primary">Back</button>
</form>
@endsection