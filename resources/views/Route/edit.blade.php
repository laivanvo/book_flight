<form action = "{{ route('hocsinh.update',$hocsinhs->id) }}" method = "POST">
    @csrf
    @method('PUT')
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin = "anonymous">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin = "anonymous"></script>
<form>
	<div class = "form-group has-success">
    	<label for = "name" class = "control-label">Name</label>
		<input value = "{{ $hocsinhs->name }}" type = "text" class = "form-control" name = "name" id = "name" placeholder = "Name">
        <span class = "help-block">Enter text only</span>
        @error('name')
        <span class = "invalid-feedback" role = "alert">
        <strong style = "color: red">{{ $message }}</strong>
        </span>
        @enderror        
	</div>
	<div class = "form-group has-warning">
    	<label for = "Phone" class = "control-label">Phone</label>
		<input value = "{{ $hocsinhs->phone }}" type = "text" class = "form-control" name = "phone" id = "phone" placeholder = "Phone"> 
        <span class = "help-block">Enter a valid phone</span>
        @error('phone')
<span class = "invalid-feedback" role = "alert">
    <strong style = "color: red">{{ $message }}</strong><br>
</span>
@enderror
	</div>
    <div class = "form-group has-error">
    	<label for = "Password" class = "control-label">Id_card</label>
		<input value = "{{ $hocsinhs->id_card }}" type = "text" class = "form-control" name = "id_card" id = "password12" placeholder = "Id_card"> 
        <span class = "help-block">Enter numbers only</span>
        @error('id_card')
<span class = "invalid-feedback" role = "alert">
    <strong style = "color: red">{{ $message }}</strong><br>
</span>
@enderror

	</div>
    <button type = "submit" class = "btn btn-primary">Save</button>
</form>