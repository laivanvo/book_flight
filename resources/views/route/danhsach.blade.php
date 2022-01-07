<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="css/laivanvo.css" />
</head>
<body>
    
    {{-- <label for="menuState"><img src="images/open.png"/></label>
    <input type="checkbox" name="menuState" id="menuState">
    <label id="mask" for="menuState"></label>
    <ul id="menu">
        <li><a href="#"><img src="images/open.png"/></a></li>
        <li><label for="menuState"></label></li>
    </ul> --}}
    <div id="wraper">
        <div id="top">
            <div id="item">
                <img src="images/airlines.png"/>
                <div><input value="{{ $hocsinhs->name }}" type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
            </div>
            <div id="item"></div>
            <div id="item"></div>
            <div id="item"></div>
            <div id="item"></div>
        </div>
        <div id="left"></div>
        <div id="main">
            <div id="top1">
                <div id="item1"></div>
                <div id="item1"></div>
                <div id="item1"></div>
                
            </div>
        </div>
        <div id="right"></div>
        
    </div>
        {{-- <div id="slider">
            <input type="radio" checked="checked" name="sliderImg" id="img1">
            <div>
                <label for="img2"><img src="images/prev.png"/></label>
                <label><img src="images/airlines.png"/></label>
                <label for="img2"><img src="images/next.png"/></label>
            </div>
            <input type="radio" name="sliderImg" id="img2">
            <div>
                
                <label for="img1"><img src="images/prev.png"/></label>  
                <label><img src="images/airlines2.png"/></label>
                <label for="img1"><img src="images/next.png"/></label>
            </div>
            <input type="radio" name="sliderImg" id="img3">   
            <div>
                
                <label for="img2"><img src="images/prev.png"/></label>
                <img src="images/3.jpg"/>
                <label for="img1"><img src="images/next.png"/></label>
            </div>
        </div> --}}
    
    
</body>
</html>