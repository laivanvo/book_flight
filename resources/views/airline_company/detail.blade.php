@extends('index')
@section('content')
<form action="{{ route('airline_company.index') }}" method="GET">
    @csrf
    @method('GET')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<form>
	<div class="form-group has-success">
        <label style="padding-top:10px; width: 100%;height:50px;background-color:rgb(157, 228, 77);color:black" class="control-label">name_airline_company:   {{ $airline_companys->name_airline_company }}</label><br>
        <button type="submit" class="btn btn-primary">Back</button>
</form>
@endsection