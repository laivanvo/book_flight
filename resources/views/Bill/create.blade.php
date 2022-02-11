@extends('index')
@section('content')
<form action = "{{ route('bill.store') }}" method = "POST">
    @csrf
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin = "anonymous">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin = "anonymous"></script>
<form>
	<div class = "form-group has-success">
    	<label for = "name" class = "control-label">user_id</label>
		<select name = "user_id"><option value = "">-- select one --</option>
            @foreach ($users as $user_id)
            <option value = "{{ $user_id->id }}">{{ $user_id->id }}</option>
            @endforeach
        </select>
        @error('user_id')
        <strong>
        <small
        class = "text-danger">{{ $message }}
        </small>
        </strong>
        @enderror
	</div>
	<div class = "form-group has-warning">
    	<label for = "total_money" class = "control-label">total_money</label>
		<input  type = "text" class = "form-control" name = "total_money" placeholder = "total_money"> 
        <span class = "help-block">Enter a valid number</span>
        @error('total_money')
        <strong>
        <small
        class = "text-danger">{{ $message }}
        </small>
        </strong>
        @enderror
	</div>
    <button type = "submit" class = "btn btn-primary">Save</button>
</form>
@endsection