@extends('index')
@section('content')
<form action="{{ route('user.index',$users->id) }}" method="GET">
    @csrf
    @method('PUT')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<form>
	<div class="form-group has-success">
    	
        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="name" class="control-label">name:   {{ $users->name }}</label><br>
        
        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="email" class="control-label">email:   {{ $users->email }}</label><br>
       
		<label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="password" class="control-label">password:  {{ $users->password }}</label><br>
        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"  for="role_id" class="control-label">role_id:  {{ $users->role_id }}</label><br>
    <button type="submit" class="btn btn-primary">Back</button>
</form>
@endsection