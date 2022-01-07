<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<script src="jquery/laivanvo.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section" style="background-image:url({{asset('assets/client/assets/images/food-1.jpg')}})">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book Your Flight</h1>
						</div>
						<form action="{{  route('book')}}" method="POST">
							@csrf
						
						<form>
					    <div class="form-group">
								<div class="form-checkbox">
									<label for="roundtrip">
										
										<input type="radio" id="roundtrip" name="flight-type">
										<span></span>Roundtrip
									</label>
									<label for="one-way">
										<input type="radio" id="one-way" name="flight-type">
										<span></span>One way
									</label>
									<label for="multi-city">
										<input type="radio" id="multi-city" name="flight-type">
										<span></span>Multi-City
									</label>
								</div>
							</div>
							<div class="form-group">
								<input name="sort" value="" style="max-width: 0px;max-height:0px;display:none">
								<input name="name_airline_company" value="" style="max-width: 0px;max-height:0px;display:none">
								@for($a=1;$a<=10;$a++)
								<input name="name_airline_company{{ $a }}" style="max-width: 0px;max-height:0px;display:none">
								@endfor
								<input id="myInput" class="form-control" type="text" name="departure_airport" onkeyup="Search_departure_airport()">
								<ul class="myUL" id="myUL">
									<?php
									$count1=0;
										?>
								  @foreach ($route_departure_airports as $route_departure_airport)
									   <?php
									   $count1++;
									   ?>
									  <li><a onclick="departure_airport({{ $count1 }})" value="{{ $route_departure_airport->departure_airport }}" id="departure_airport{{ $count1 }}" type="text">{{ $route_departure_airport->departure_airport }}</a></li>
								  @endforeach
								  <li><a>{{ $count1 }}</a></li>
								</ul>
								<span class="form-label">Flying from</span>
								@error('departure_airport')
								<span class="invalid-feedback" role="alert">
								<strong style="color: red">{{ $message }}</strong>
								</span>
								@enderror        
							</div>
							<div class="form-group">
								<input id="myInput2" class="form-control" type="text" name="arrival_airport" onkeyup="Search_arrival_airport()">
								<ul class="myUL" id="myUL2">
									<?php
									$count1=0;
										?>
								  @foreach ($route_arrival_airports as $route_arrival_airport)
									   <?php
									   $count1++;
									   ?>
									  <li><a onclick="arrival_airport({{ $count1 }})" value="{{ $route_arrival_airport->arrival_airport }}" id="arrival_airport{{ $count1 }}" type="text">{{ $route_arrival_airport->arrival_airport }}</a></li>
								  @endforeach
								  <li><a>{{ $count1 }}</a></li>
								</ul>
								<span class="form-label">Flying to</span>
								@error('arrival_airport')
								<span class="invalid-feedback" role="alert">
								<strong style="color: red">{{ $message }}</strong>
								</span>
								@enderror        
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name="dateDeparture">
										<span class="form-label">Check In</span>
										@error('dateDeparture')
										<span class="invalid-feedback" role="alert">
										<strong style="color: red">{{ $message }}</strong>
										</span>
										@enderror
										   
									</div>
								</div>
								{{-- <div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name="dateArrival">
										<span class="form-label">Check Out</span>
									</div>
								</div> --}}
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="name_category">
											<option value="Economy class">Economy class</option>
											<option value="Deluxe Economy">Deluxe Economy</option>
											<option value="Business class">Business class</option>
											
										</select>
										<span class="select-arrow"></span>
										<span style="left:10%;position:absolute;color: white;top:-7px;font-width:bold;font-size:16px;text-transform: uppercase;font-family: 'Montserrat', sans-serif">Travel class</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										{{-- <select class="form-control" name="adult">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span> --}}
										
										<div class="form-control" style="position: relative" >
											<span style="position:absolute;color: white;top:-7px;font-width:bold;font-size:16px;text-transform: uppercase;font-family: 'Montserrat', sans-serif">Adults</span>
											<input name="adult" style="padding:0,0;width:100%;height:100%;background-color:#1c2126;border:none;color:white" id="ct2_adult" type="number" value="{{ 1 }}">
										</div>
										<span class="select-arrow"></span>
										
									
										@error('adult')
										<span class="invalid-feedback" role="alert">
										<strong style="color: red">{{ $message }}</strong>
										</span>
										@enderror
								
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										{{-- <select class="form-control" name="children">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span> --}}
										<div class="form-control" style="position: relative" >
											<span style="position:absolute;color: white;top:-7px;font-width:bold;font-size:16px;text-transform: uppercase;font-family: 'Montserrat', sans-serif">Children</span>
											<input name="children" style="padding:0,0;width:100%;height:100%;background-color:#1c2126;border:none;color:white" id="ct2_adult" type="number" value="{{ 1 }}">
										</div>
										<span class="select-arrow"></span>
										
									
										@error('children')
										<span class="invalid-feedback" role="alert">
										<strong style="color: red">{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								
							</div>
							<div class="form-btn">
								<button class="submit-btn" type="submit">Check availability</button>
							</div>
						</form>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script src='https://cdn6.agoda.net/js/mspa/svg.3af201f105d03fcc7211.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-japanican.c32d21f3f85c3003ef72.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-agoda.c0c33690a9013b737c19.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-priceline.7ef85e9f5988f46b0332.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-rurubu.a381ac9d3ec301b2f395.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/initialVendor.2bc44ea102a30e069686.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-jtb.c603eaf22cbcf2bcea7f.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/bfPackages.3baaeb2b31b9e54aa212.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/vendor.00a7c42305c15db0179c.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-rmtmobiletravel.9687a6ebf8970be1ea69.js' crossorigin="anonymous"></script>

    
</html>