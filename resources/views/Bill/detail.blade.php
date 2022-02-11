@extends('index')
@section('content')
<form action = "{{ route('hocsinh.update',$hocsinhs->id) }}" method = "POST">
    @csrf
    @method('PUT')
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin = "anonymous">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin = "anonymous"></script>
<form>
	<div class = "form-group has-success">
    	
        <label style = "padding-top:10px; width: 40%;height:50px;background-color:rgb(157, 228, 77);color:red"  for = "name" class = "control-label">Name:   {{ $hocsinhs->name }}</label><br>
        
        <label style = "padding-top:10px; width: 40%;height:50px;background-color:rgb(157, 228, 77);color:red"  for = "name" class = "control-label">Phone:   {{ $hocsinhs->phone }}</label><br>
       
		<label style = "padding-top:10px; width: 40%;height:50px;background-color:rgb(157, 228, 77);color:red"  for = "name" class = "control-label">Id_card:  {{ $hocsinhs->id_card }}</label><br>
    <button type = "submit" class = "btn btn-primary">Save</button>
</form>
@endsection