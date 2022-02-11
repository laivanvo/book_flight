<!DOCTYPE html>
<html lang = "en">

<head>
	<meta charset = "utf-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href = "https://fonts.googleapis.com/css?family = Montserrat:400,700" rel = "stylesheet">

	<!-- Bootstrap -->
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type = "text/css" rel = "stylesheet" href = "css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src = "https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>
<section class = "frontpage-slider">
    
    <div class = "owl-slider owl-slider-header owl-slider-fullscreen">

        <!--  =  =  =  slide item  =  =  =  -->

        <div class = "item" style = "background-image:url({{asset('assets/client/assets/images/image1.jpg')}})">
            <div class = "box text-center" >
                <div class = "container" >
                    <br>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>

                    <section class = "booking booking-inner" >
                        <div class = "booking-wrapper" >
                        <div id = "booking" class = "section" >
                        <div class = "section-center" >
                            <div class = "container" >
                                <div class = "row">
                                    <div class = "booking-form">
                                        
                                        <form>
                                            <div class = "form-group">
                                                <div class = "form-checkbox">
                                                    <label for = "roundtrip">
                                                        <input type = "radio" id = "roundtrip" name = "flight-type">
                                                        <span></span>Roundtrip
                                                    </label>
                                                    <label for = "one-way">
                                                        <input type = "radio" id = "one-way" name = "flight-type">
                                                        <span></span>One way
                                                    </label>
                                                    <label for = "multi-city">
                                                        <input type = "radio" id = "multi-city" name = "flight-type">
                                                        <span></span>Multi-City
                                                    </label>
                                                </div>
                                            </div>
                                            <div class = "form-group">
                                                <input class = "form-control" type = "text">
                                                <span class = "form-label">Flying from</span>
                                            </div>
                                            <div class = "form-group">
                                                <input class = "form-control" type = "text">
                                                <span class = "form-label">Flying to</span>
                                            </div>
                                            <div class = "row">
                                                <div class = "col-md-6">
                                                    <div class = "form-group">
                                                        <input class = "form-control" type = "date">
                                                        <span class = "form-label">Check In</span>
                                                    </div>
                                                </div>
                                                <div class = "col-md-6">
                                                    <div class = "form-group">
                                                        <input class = "form-control" type = "date">
                                                        <span class = "form-label">Check Out</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div class = "col-md-4">
                                                    <div class = "form-group">
                                                        <select class = "form-control">
                                                            <option>Economy class</option>
                                                            <option>Business class</option>
                                                            <option>First class</option>
                                                        </select>
                                                        <span class = "select-arrow"></span>
                                                        <span class = "form-label">Travel class</span>
                                                    </div>
                                                </div>
                                                <div class = "col-md-4">
                                                    <div class = "form-group">
                                                        <select class = "form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <span class = "select-arrow"></span>
                                                        <span class = "form-label">Adults</span>
                                                    </div>
                                                </div>
                                                <div class = "col-md-4">
                                                    <div class = "form-group">
                                                        <select class = "form-control">
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <span class = "select-arrow"></span>
                                                        <span class = "form-label">Children</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "form-btn">
                                                <button class = "submit-btn">Check availability</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </section>
                    {{-- <div class = "animated" data-animation = "fadeInUp">
                        <a href = "https://themeforest.net/item/colina-hotel-website-template/20977257" class = "btn btn-clean">Buy this template</a>
                    </div> --}}
                </div>
            </div>
        </div>

        <!--  =  =  =  slide item  =  =  =  -->

        <div class = "item" style = "background-image:url({{asset('assets/client/assets/images/image2.jpg')}})">
            <div class = "box text-center">
                <div class = "container">
                    <br>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>

                    <section class = "booking booking-inner">
                        <div class = "booking-wrapper">
                        <div id = "booking" class = "section">
                        <div class = "section-center">
                            <div class = "container">
                                <div class = "row">
                                    <div class = "booking-form">
                                        
                                        <form>
                                            <div class = "form-group">
                                                <div class = "form-checkbox">
                                                    <label for = "roundtrip">
                                                        <input type = "radio" id = "roundtrip" name = "flight-type">
                                                        <span></span>Roundtrip
                                                    </label>
                                                    <label for = "one-way">
                                                        <input type = "radio" id = "one-way" name = "flight-type">
                                                        <span></span>One way
                                                    </label>
                                                    <label for = "multi-city">
                                                        <input type = "radio" id = "multi-city" name = "flight-type">
                                                        <span></span>Multi-City
                                                    </label>
                                                </div>
                                            </div>
                                            <div class = "form-group">
                                                <input class = "form-control" type = "text">
                                                <span class = "form-label">Flying from</span>
                                            </div>
                                            <div class = "form-group">
                                                <input class = "form-control" type = "text">
                                                <span class = "form-label">Flying to</span>
                                            </div>
                                            <div class = "row">
                                                <div class = "col-md-6">
                                                    <div class = "form-group">
                                                        <input class = "form-control" type = "date">
                                                        <span class = "form-label">Check In</span>
                                                    </div>
                                                </div>
                                                <div class = "col-md-6">
                                                    <div class = "form-group">
                                                        <input class = "form-control" type = "date">
                                                        <span class = "form-label">Check Out</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div class = "col-md-4">
                                                    <div class = "form-group">
                                                        <select class = "form-control">
                                                            <option>Economy class</option>
                                                            <option>Business class</option>
                                                            <option>First class</option>
                                                        </select>
                                                        <span class = "select-arrow"></span>
                                                        <span class = "form-label">Travel class</span>
                                                    </div>
                                                </div>
                                                <div class = "col-md-4">
                                                    <div class = "form-group">
                                                        <select class = "form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <span class = "select-arrow"></span>
                                                        <span class = "form-label">Adults</span>
                                                    </div>
                                                </div>
                                                <div class = "col-md-4">
                                                    <div class = "form-group">
                                                        <select class = "form-control">
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <span class = "select-arrow"></span>
                                                        <span class = "form-label">Children</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "form-btn">
                                                <button class = "submit-btn">Check availability</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </section>
                    {{-- <div class = "animated" data-animation = "fadeInUp">
                        <a href = "https://themeforest.net/item/colina-hotel-website-template/20977257" class = "btn btn-clean">Buy this template</a>
                    </div> --}}
                </div>
            </div>
        </div>

        <!--  =  =  =  slide item  =  =  =  -->

        <div class = "item" style = "background-image:url({{asset('assets/client/assets/images/image3.jpg')}})">
            <div class = "box text-center">
                <div class = "container">
                    <br>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>

                    <section class = "booking booking-inner">
                        <div class = "booking-wrapper">
                        <div id = "booking" class = "section">
                        <div class = "section-center">
                            <div class = "container">
                                <div class = "row">
                                    <div class = "booking-form">
                                        
                                        <form>
                                            <div class = "form-group">
                                                <div class = "form-checkbox">
                                                    <label for = "roundtrip">
                                                        <input type = "radio" id = "roundtrip" name = "flight-type">
                                                        <span></span>Roundtrip
                                                    </label>
                                                    <label for = "one-way">
                                                        <input type = "radio" id = "one-way" name = "flight-type">
                                                        <span></span>One way
                                                    </label>
                                                    <label for = "multi-city">
                                                        <input type = "radio" id = "multi-city" name = "flight-type">
                                                        <span></span>Multi-City
                                                    </label>
                                                </div>
                                            </div>
                                            <div class = "form-group">
                                                <input class = "form-control" type = "text">
                                                <span class = "form-label">Flying from</span>
                                            </div>
                                            <div class = "form-group">
                                                <input class = "form-control" type = "text">
                                                <span class = "form-label">Flying to</span>
                                            </div>
                                            <div class = "row">
                                                <div class = "col-md-6">
                                                    <div class = "form-group">
                                                        <input class = "form-control" type = "date">
                                                        <span class = "form-label">Check In</span>
                                                    </div>
                                                </div>
                                                <div class = "col-md-6">
                                                    <div class = "form-group">
                                                        <input class = "form-control" type = "date">
                                                        <span class = "form-label">Check Out</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div class = "col-md-4">
                                                    <div class = "form-group">
                                                        <select class = "form-control">
                                                            <option>Economy class</option>
                                                            <option>Business class</option>
                                                            <option>First class</option>
                                                        </select>
                                                        <span class = "select-arrow"></span>
                                                        <span class = "form-label">Travel class</span>
                                                    </div>
                                                </div>
                                                <div class = "col-md-4">
                                                    <div class = "form-group">
                                                        <select class = "form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <span class = "select-arrow"></span>
                                                        <span class = "form-label">Adults</span>
                                                    </div>
                                                </div>
                                                <div class = "col-md-4">
                                                    <div class = "form-group">
                                                        <select class = "form-control">
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <span class = "select-arrow"></span>
                                                        <span class = "form-label">Children</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "form-btn">
                                                <button class = "submit-btn">Check availability</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </section>
                    {{-- <div class = "animated" data-animation = "fadeInUp">
                        <a href = "https://themeforest.net/item/colina-hotel-website-template/20977257" class = "btn btn-clean">Buy this template</a>
                    </div> --}}
                </div>
            </div>
        </div>

    </div> <!--/owl-slider-->
</section>
</body>