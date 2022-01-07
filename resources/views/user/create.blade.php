<form action="{{ route('user.store') }}" method="POST">
    @csrf
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<form>
    
	<div class="form-group has-success">
    	<label for="name" class="control-label">Name</label>
		<input  type="text" class="form-control" name="name" id="name" placeholder="Name">
        <span class="help-block">Enter text only</span>
        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong style="color: red">{{ $message }}</strong>
        </span>
        @enderror        
	</div>
    <div class="form-group has-success">
    	<label for="name" class="control-label">email</label>
		<input  type="text" class="form-control" name="email" id="email" placeholder="Name">
        <span class="help-block">Enter text only</span>
        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong style="color: red">{{ $message }}</strong>
        </span>
        @enderror        
	</div>
	<div class="form-group has-warning">
    	<label for="Phone" class="control-label">password</label>
		<input  type="text" class="form-control" name="password" id="password" placeholder="Phone"> 
        <span class="help-block">Enter a valid phone</span>
        @error('phone')
<span class="invalid-feedback" role="alert">
    <strong style="color: red">{{ $message }}</strong><br>
</span>
@enderror
	</div>
    {{-- <div class="form-group has-success">
    	<label for="name" class="control-label">role_id</label>
		<select name="role_id"><option value="">-- select one --</option>
            @foreach ($role_ids as $role_id)
            <option value="{{ $role_id->id }}">{{ $role_id->id }}</option>
            @endforeach
        </select>
        {{-- @error('name')
        <span class="invalid-feedback" role="alert">
        <strong style="color: red">{{ $message }}</strong>
        </span>
        @enderror         --}}
	{{-- </div> --}} 
    
    <button type="submit" class="btn btn-primary">Save</button>
</form>