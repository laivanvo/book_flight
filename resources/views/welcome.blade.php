<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie = edge">
    <title>Document</title>
    <link type = "text/css" rel = "stylesheet" href = "css/laivanvo.css" />
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "jquery/laivanvo.min.js"></script>
    <script>
        function loadDoc() {
            document.getElementById("demo").innerHTML  = 
              "an tuyen vo";
        }
        var y = 1;
        var x = 'ccc'+y;

// for (var i = 1;i< = 20;i++)
// {
//   x = '#departure_airport'+i;
//   console.log('abc');   
//   $(document).ready(function(){
//   $(x).click(function(){
//     document.getElementById('myInput').value = 'abc';
//   });
// });
}
        </script>
        <?php
        $i = 0;
        ?>
</head>
<body>
    
    {{-- <label for = "menuState"><img src = "images/open.png"/></label>
    <input type = "checkbox" name = "menuState" id = "menuState">
    <label id = "mask" for = "menuState"></label>
    <ul id = "menu">
        <li><a href = "#"><img src = "images/open.png"/></a></li>
        <li><label for = "menuState"></label></li>
    </ul> --}}
    <div id = "wraper">
        <form action = "{{ route('book') }}" method = "POST">
            @csrf
            <input name = "sort" id = "sort" style = "max-width: 0px;max-height:0px;display:none">
            <input name = "name_category" id = "name_category" value = "{{$request->_name_category}}" style = "max-width: 0px;max-height:0px;display:none">
            <input name = "name_airline_company" id = "name_airline_company" style = "max-width: 0px;max-height:0px;display:none">
        <div id = "top">
            <div id = "item">
                <div id = "item_img"><img src = "images/airlines.png"/></div>
                
                {{-- <div id = "item_ct">
                    {{ $request->name }}
                </div> --}}
                <input name = "departure_airport" class = "item_ct1" value = "{{ $request->departure_airport }}" type = "text" id = "myInput" onkeyup = "Search_departure_airport()" placeholder = "Search for names.." title = "Type in a name">

<ul id = "myUL" class = "myUL">
    <?php
    $count1 = 0;
        ?>
  @foreach ($route_departure_airports as $route_departure_airport)
       <?php
       $count1++;
       ?>
      <li><a onclick = "departure_airport({{ $count1 }})" value = "{{ $route_departure_airport->departure_airport }}" id = "departure_airport{{ $count1 }}" type = "text">{{ $route_departure_airport->departure_airport }}</a></li>
  @endforeach
</ul>

            </div>
            <div id = "item">
                <div id = "item_img"><img src = "images/map.png" /></div>
                
                <input name = "arrival_airport" class = "item_ct1" value = "{{ $request->arrival_airport }}" type = "text" id = "myInput2" onkeyup = "Search_arrival_airport()" placeholder = "Search for names.." title = "Type in a name">

<ul id = "myUL2" class = "myUL">
    <?php
    $count1 = 0;
        ?>
  @foreach ($route_arrival_airports as $route_arrival_airport)
       <?php
       $count1++;
       ?>
      <li><a onclick = "arrival_airport({{ $count1 }})" value = "{{ $route_arrival_airport->arrival_airport }}" id = "arrival_airport{{ $count1 }}" type = "text">{{ $route_arrival_airport->arrival_airport }}</a></li>
  @endforeach
</ul>
            </div>
            <div id = "item">
                <input name = "dateDeparture" id = "dateDeparture" class = "form-control" type = "date" value = "{{ $request->dateDeparture }}"> 
            </div>
            <div id = "item">
                <div id = "item_img"><img src = "images/customer.png" /></div>
                <input id = "count" type = "number" value = "{{ $request->adult + $request->children}}" readonly> 
                <div id = "customerDown">customer</div>
                <div id = "customerDetail">
                    <div id = "customer_item">
                        <div id = "ct1">
                            <div id = "ct1_title">Adult:</div>
                        </div>
                        <div id = "ct2">
                            <div id = "ct2_minus_adult"><img src = "images/minus.png"/></div>
                            <input name = "adult" id = "ct2_adult" type = "number" value = "{{ $request->adult }}" readonly>
                            <div id = "ct2_add_adult"><img src = "images/add.png"/></div>
                        </div>
                    </div>
                    <div id = "customer_item">
                        <div id = "ct1">
                            <div id = "ct1_title">Children:</div>
                        </div>
                        <div id = "ct2">
                            <div id = "ct2_minus_children"><img src = "images/minus.png"/></div>
                            <input name = "children" id = "ct2_children" type = "number" value = "{{ $request->children  }}" readonly>
                            <div id = "ct2_add_children"><img src = "images/add.png"/></div>
                        </div>
                    </div>
                    <div id = "customer_item">
                        <div class = "radio-button">
                            <input type = "radio" id = "radio1" name = "name_category" value = "Economy" >
                            <label for = "radio1" onclick = "name_category('Economy')">Economy</label>
                            <input type = "radio" id = "radio2" name = "name_category" value = "Deluxe Economy" checked>
                            <label for = "radio2" onclick = "name_category('Deluxe Economy')">Deluxe Economy</label>
                            <input type = "radio" id = "radio3" name = "name_category" value = "Business">
                            <label for = "radio3" onclick = "name_category('Business')">Business</label>
                          </div>
                    </div>
                    <div id = "customerUp"><img  src = "images/up.png"/></div>
                </div>
                
            </div>
            <div id = "item">
                
                    <button id = "search" type = "submit" style = "width: 100%;font-size:20px;height:60%;position: relative;top:20%;border-radius: 4px;background-color:#87B3FB;color:white;size:100px">Search</button>
 
            </div>
           </div>
        </form>
        <div id = "left">
            <div id = "airline_company">airline company</div>
            <?php
            $na = 0;
            ?>
            @foreach ($list_name_airline_companies as $list_name_airline_company)
            <?php
            $na++;
            ?>
            <div id = "name_airline_company{{ $na }}">
            <label><input type = "checkbox" id = "check{{ $na }}" value = "{{ $list_name_airline_company->name_airline_company }}" name = "name_airline_company{{ $na }}">{{ $list_name_airline_company->name_airline_company }}</label>
           
            </div>
            @endforeach
            <label for = "search" onclick = "check({{ $na }})">sort</label>
        </div>
        <div id = "main">
            <div id = "top0">
                
        
                @foreach ($list_dateDepartures as $list_dateDeparture)
                
                <label for = "search" class = "list_dateDeparture" value = "{{ $list_dateDeparture->pre2 }}" onclick = "list_dateDeparture(1)" id = "list_dateDeparture1">{{ $list_dateDeparture->pre2}}</label>
                <label for = "search" class = "list_dateDeparture" value = "{{ $list_dateDeparture->pre1 }}" onclick = "list_dateDeparture(2)" id = "list_dateDeparture2">{{ $list_dateDeparture->pre1}}</label>
                <label for = "search" class = "list_dateDeparture" value = "{{ $list_dateDeparture->median }}" onclick = "list_dateDeparture(3)" id = "list_dateDeparture3">{{ $list_dateDeparture->median}}</label>
                <label for = "search" class = "list_dateDeparture" value = "{{ $list_dateDeparture->next1 }}" onclick = "list_dateDeparture(4)" id = "list_dateDeparture4">{{ $list_dateDeparture->next1}}</label>
                <label for = "search" class = "list_dateDeparture" value = "{{ $list_dateDeparture->next2 }}" onclick = "list_dateDeparture(5)" id = "list_dateDeparture5">{{ $list_dateDeparture->next2}}</label>
                
                @endforeach
            </div>
            <div id = "top1">
                @if( $list_flights_count != 0)
                @foreach ($price_min as $price)
                <label class = "item1" for = "search" id = "sort1" onclick = "sort(1)" value = " order by price asc" style = "text-align: center;padding:40px">the cheapest<br>{{ $price->price }}</label>
                @endforeach
                @foreach ($speed_min as $speed)
                <label class = "item1" for = "search" id = "sort2" onclick = "sort(2)" value = " order by dateDeparture_minute asc" style = "text-align: center;padding:40px">the fastest<br>
                    @if ($speed->day != 0)
                    {{ $speed->day }}day
                    @endif
                    {{ $speed->hour }}h{{ $speed->minute }}m</label>
                @endforeach
                
                <label class = "item1" for = "search" id = "sort3" onclick = "sort(3)" value = " order by price asc,dateDeparture_minute asc" style = "text-align: center;padding:20px">Fastest and cheapest<br>
                    @foreach ($speed_price_min as $speed_price)
                   <br>{{ $speed_price->price }}
                   <br>
                        @if ($speed_price->day != 0)
                        {{ $speed_price->day }}day
                        @endif
                        {{ $speed_price->hour }}h{{ $speed_price->minute }}m</label>
                    @endforeach
                    
                </label>
                @endif
                @if( $list_flights_count == 0)
                <img style = "margin-left: 25%;margin-top:3%;width:400px;height:400px"  src = "images/no data.png"/>
                <div style = "text-align: center;padding:50px;font-weight:bold;font-size:30px">Không tìm thấy kết quả nào!</div>
                <div style = "text-align: center;padding:20px">Hãy thử thay đổi ngày quý khách đi/đến và tìm kiếm lại.</div>
                @endif
            </div>
          
        
        
        
        
           @foreach ($list_flights as $list_flight)
           <?php
           $i++;
           ?>
           <div class = "item_flight" id = "item_flight{{ $i }}">
            <div class = "flight" id = "flight{{ $i }}">
                <div id = "item_img1">
                   <img src = "images/vietnam airline.png"/>
                </div>
                <div id = "item_text1" style = "text-align: center">
                    {{ $list_flight->name_airline_company }}
                 </div>
                <div id = "item_ct">
                    <div class = "flight_content">{{ $list_flight->dateDeparture_hour }}:{{ $list_flight->dateDeparture_minute }}-------------------->{{ $list_flight->dateArrival_hour }}:{{ $list_flight->dateArrival_minute }}</div>
                    <div class = "flight_content">
                        <div class = "flight_content1">{{ $list_flight->departure_airport }}</div>
                        <div class = "flight_content1">--------------------></div>
                        <div class = "flight_content1">{{ $list_flight->arrival_airport }}</div>
                    </div>
                    <div class = "flight_content">--------
                        @if ($list_flight->day != 0)
                        {{ $list_flight->day }}day
                        @endif
                        {{ $list_flight->hour }}h{{ $list_flight->minute }}m---------</div>
                </div>
                <div id = "item_click"><div>{{ $list_flight->price }}</div>
                {{-- <input type = "button" value = "Choose" onclick = "choose({{ $i }})"> --}}
                <form action = "{{ route('fill') }}" method = "POST">
                    @csrf
                    <input name = "children2" id = "ct2_children2" type = "number" value = "{{ $request->children  }}" style = "max-width: 0px;max-height:0px;display:none" readonly>
                    <input name = "adult2" id = "ct2_adult2" type = "number" value = "{{ $request->adult  }}" style = "max-width: 0px;max-height:0px;display:none" readonly>
                    <input name = "count_customer" type = "number" id = "count_customer" value = "{{ $request->adult + $request->children}}" style = "max-width: 0px;max-height:0px;display:none">
                    <input name = "flight_code" value = "{{ $list_flight->flight_code }}" style = "max-width: 0px;max-height:0px;display:none">
                    <input name = "plane_code" value = "{{ $list_flight->plane_code }}" style = "max-width: 0px;max-height:0px;display:none">
                    <input type = "submit" value = "Choose" id = "choose">
                </form>
            </div>
            </div>
        <div class = "detailDown" onclick = "detailDown({{ $i }})" id = "detailDown{{ $i }}">detail</div> 
        <div class = "detail" id = "detail{{ $i }}">
            <div id = "detail_title">flight</div>
            <div id = "detail_left">
                <div class = "detail_left_item">{{ $list_flight->dateDeparture_hour }}:{{ $list_flight->dateDeparture_minute }}</div>
                <div class = "detail_left_item">{{ $list_flight->hour }}h{{ $list_flight->minute }}m</div>
                <div class = "detail_left_item">{{ $list_flight->dateArrival_hour }}:{{ $list_flight->dateArrival_minute }}</div>
            </div>
            <div id = "detail_img"><img src = "images/planes/flight.png"/></div>
            <div id = "detail_content">
                <div class = "detail_content_item">{{ $list_flight->departure_airport }}</div>
                <div class = "detail_content_item">
                    <img src = "images/vietnam airline.png" style = "max-width: 15%;max-height:100%"/>
                    <div id = "detail_content_item_div">{{ $list_flight->name_airline_company }}</div>
                    </div>
                <div class = "detail_content_item">{{ $list_flight->name_plane }}</div>
                <div class = "detail_content_item">{{ $list_flight->name_category }}</div>
                <div class = "detail_content_item">{{ $list_flight->arrival_airport }}</div>
            </div>
            <div class = "detailUp" onclick = "detailUp({{ $i }})" id = "detailUp{{ $i }}"><img style = "max-height:100%" src = "images/up.png"/></div>
        </div>
        </div>
           @endforeach
           
          
        </div>
        <div id = "right">
            <a href = "https://www.icmarkets.com/global/fr/trading-markets/digitalcurrency"><img style = "margin-left:7px;width: 255px" src = "images/coin.png"/></a>
            <a href = "https://kfoodfair.vn/"><img style = "margin-left:7px;width: 255px" src = "images/do_an.png"/></a>
        </div>
        {{-- <div id = "detail">
            <div id = "detailUp"><img src = "images/up.png"/></div>
            </div> --}}
    </div>
        {{-- <div id = "slider">
            <input type = "radio" checked = "checked" name = "sliderImg" id = "img1">
            <div>
                <label for = "img2"><img src = "images/prev.png"/></label>
                <label><img src = "images/airlines.png"/></label>
                <label for = "img2"><img src = "images/next.png"/></label>
            </div>
            <input type = "radio" name = "sliderImg" id = "img2">
            <div>
                
                <label for = "img1"><img src = "images/prev.png"/></label>  
                <label><img src = "images/airlines2.png"/></label>
                <label for = "img1"><img src = "images/next.png"/></label>
            </div>
            <input type = "radio" name = "sliderImg" id = "img3">   
            <div>
                
                <label for = "img2"><img src = "images/prev.png"/></label>
                <img src = "images/3.jpg"/>
                <label for = "img1"><img src = "images/next.png"/></label>
            </div>
        </div> --}}
    
    
</body>
</html>
