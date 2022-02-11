<html>
<form action = "{{ route('plane.store') }}" method = "POST">
    @csrf
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin = "anonymous">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin = "anonymous"></script>
<form>
	<div class = "form-group has-success">
    	<label for = "name" class = "control-label">flight_id</label>
		<select name = "flight_id"><option value = "">-- select one --</option>
            @foreach ($flights as $flight_id)
            <option value = "{{ $flight_id->id }}">{{ $flight_id->id }}</option>
            @endforeach
        </select>
        {{-- @error('name')
        <span class = "invalid-feedback" role = "alert">
        <strong style = "color: red">{{ $message }}</strong>
        </span>
        @enderror         --}}
	</div>
    <div class = "form-group has-error">
    	<label for = "name" class = "control-label">category_id</label>
		<select name = "category_id"><option value = "">-- select one --</option>
            @foreach ($categories as $category)
            <option value = "{{ $category->id }}">{{ $category->id }}</option>
            @endforeach
        </select>
        {{-- @error('name')
        <span class = "invalid-feedback" role = "alert">
        <strong style = "color: red">{{ $message }}</strong>
        </span>
        @enderror         --}}

	</div>
	<div class = "form-group has-success">
    	<label for = "name" class = "control-label">airline_company_id</label>
		<select name = "airline_company_id"><option value = "">-- select one --</option>
            @foreach ($airline_companies as $airline_company_id)
            <option value = "{{ $airline_company_id->id }}">{{ $airline_company_id->id }}</option>
            @endforeach
        </select>
        {{-- @error('name')
        <span class = "invalid-feedback" role = "alert">
        <strong style = "color: red">{{ $message }}</strong>
        </span>
        @enderror         --}}
	</div>
    <div class = "form-group has-error">
    	<label for = "Password" class = "control-label">name_plane</label>
		<input  type = "text" class = "form-control" name = "name_plane" id = "password12" placeholder = "name_plane"> 
        <span class = "help-block">Enter numbers only</span>
        @error('name_plane')
<span class = "invalid-feedback" role = "alert">
    <strong style = "color: red">{{ $message }}</strong><br>
</span>
@enderror

	</div>
    <div class = "form-group has-error">
    	<label for = "Password" class = "control-label">category_id</label>
		<input  type = "text" class = "form-control" name = "category_id" id = "password12" placeholder = "category_id"> 
        <span class = "help-block">Enter numbers only</span>
        @error('category_id')
<span class = "invalid-feedback" role = "alert">
    <strong style = "color: red">{{ $message }}</strong><br>
</span>
@enderror

	</div>
    <div class = "form-group has-error">
    	<label for = "Password" class = "control-label">image</label>
		
            <div>
                {{-- <label for = "formFile" class = "form-label">Hình ảnh</label> --}}
                <input class = "form-control form-control-xl" name = "image" type = "file" id = "formFile">
            </div>
        @error('category_id')
<span class = "invalid-feedback" role = "alert">
    <strong style = "color: red">{{ $message }}</strong><br>
</span>
@enderror

	</div>
    <div class = "form-group has-error">
    	<label for = "Password" class = "control-label">price</label>
		<input  type = "text" class = "form-control" name = "price" id = "password12" placeholder = "price"> 
        <span class = "help-block">Enter numbers only</span>
        @error('price')
<span class = "invalid-feedback" role = "alert">
    <strong style = "color: red">{{ $message }}</strong><br>
</span>
@enderror

	</div>
    <button type = "submit" class = "btn btn-primary">Save</button>
</form>
</html>