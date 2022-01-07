<form action="{{ route('flight.update',$flights->id) }}" method="POST">
    @csrf
    @method('PUT')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<form>
	<div class="form-group has-success">
    	<label for="name" class="control-label">route_id</label>
		<input value="{{ $flights->route_id }}" type="text" class="form-control" name="route_id" placeholder="route_id">
        <span class="help-block">Enter text only</span>
        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong style="color: red">{{ $message }}</strong>
        </span>
        @enderror        
	</div>
    <div class="form-group has-success">
    	<label for="name" class="control-label">dateDeparture</label>
		<input type="datetime-local" value="{{ $flights->dateDeparture }}"  class="form-control" name="dateDeparture" placeholder="dateDeparture">
        <span class="help-block">Enter text only</span>
        @error('dateDeparture')
        <span class="invalid-feedback" role="alert">
        <strong style="color: red">{{ $message }}</strong>
        </span>
        @enderror        
	</div>
    <div class="form-group has-success">
    	<label for="name" class="control-label">dateArrival</label>
		<input value="{{ $flights->dateArrival }}" type="datetime-local" class="form-control" name="dateArrival" placeholder="dateArrival">
        <span class="help-block">Enter text only</span>
        @error('dateArrival')
        <span class="invalid-feedback" role="alert">
        <strong style="color: red">{{ $message }}</strong>
        </span>
        @enderror        
	</div>
	
    <button type="submit" class="btn btn-primary">Save</button>
</form>