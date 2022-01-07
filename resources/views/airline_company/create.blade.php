@extends('index')
@section('content')
<form action="{{ route('airline_company.store') }}" method="POST">
    @csrf
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<form>
	<div class="form-group has-success">
    	<label for="name" class="control-label">name_airline_company</label>
		<input  type="text" class="form-control" name="name_airline_company" placeholder="name_airline_company">
        <span class="help-block">Enter text only</span>
        {{-- @error('name_airline_company')
        <span class="invalid-feedback" role="alert">
        <strong style="color: red">{{ $message }}</strong>
        </span>
        @enderror --}}
        @error('name_airline_company')
        <strong>
        <small
        class="text-danger">{{ $message }}
        </small>
        </strong>
        @enderror     
	</div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
