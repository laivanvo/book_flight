@extends('index')
@section('content')
<form action = "{{ route('plane.index',$planes->id) }}" method = "GET">
    @csrf
    
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin = "anonymous">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin = "anonymous"></script>
<form>
	<div class = "form-group has-success">

        <label style = "padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"   class = "control-label">flight:   {{ $planes->flight_id }}</label><br>
    	<label style = "padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"   class = "control-label">airline_company:   {{ $planes->airline_company_id }}</label><br>
    	
        <label style = "padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"   class = "control-label">Name:   {{ $planes->name_plane }}</label><br>
        <label style = "padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"   class = "control-label">category:   {{ $planes->category_id }}</label><br>
    	
        <label style = "padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"   class = "control-label">price:   {{ $planes->price }}</label><br>
        
        <label style = "padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"   class = "control-label">image:   {{ $planes->image }}</label><br>
       
		<label style = "padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"   class = "control-label">chair:  {{ $planes->chair }}</label><br>
        <label style = "padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:red"   class = "control-label">status:   {{ $planes->status }}</label><br>
        <button type = "submit" class = "btn btn-primary">Back</button>
</form>
@endsection