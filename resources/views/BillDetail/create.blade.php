@extends('index')
@section('content')
<form action = "{{ route('bill_detail.store') }}" method = "POST">
    @csrf
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin = "anonymous">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin = "anonymous"></script>
<form>
	
    <button type = "submit" class = "btn btn-primary">Save</button>
</form>