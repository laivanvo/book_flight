@extends('index')
@section('content')
<form action="{{ route('flight.store') }}" method="POST">
    @csrf
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<form>
	<div class="form-group has-success">
    	<label for="name" class="control-label">route_id</label>
		<select name="route_id"><option value="">-- select one --</option>
            @foreach ($route_ids as $route_id)
            <option value="{{ $route_id->id }}">{{ $route_id->id }}</option>
            @endforeach
        </select>
              
	</div>
	<div class="form-group has-warning">
    	<label for="dateDeparture" class="control-label">dateDeparture</label>
		<input  type="datetime-local" class="form-control" name="dateDeparture" id="dateDeparture" placeholder="dateDeparture"> 
    
        @error('dateDeparture')
<span class="invalid-feedback" role="alert">
    <strong style="color: red">{{ $message }}</strong><br>
</span>
@enderror
	</div>
    <div class="form-group has-error">
    	<label for="Password" class="control-label">dateArrival</label>
		<input  type="datetime-local" class="form-control" name="dateArrival" id="password12" placeholder="dateArrival"> 
        <span class="help-block">Enter numbers only</span>
        @error('dateArrival')
<span class="invalid-feedback" role="alert">
    <strong style="color: red">{{ $message }}</strong><br>
</span>
@enderror

	</div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection