<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="css/fill.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery/laivanvo.min.js"></script>
    <script>
        function loadDoc() {
            document.getElementById("demo").innerHTML =
              "an tuyen vo";
        }
        var y=1;
        var x='ccc'+y;

// for(var i=1;i<=20;i++)
// {
//   x='#departure_airport'+i;
//   console.log('abc');   
//   $(document).ready(function(){
//   $(x).click(function(){
//     document.getElementById('myinput name=""').value='abc';
//   });
// });
}
        </script>
        {{-- <script>
            for(var i=1;i<=$request->count_customer;i++)
            {
                $(document).ready(function(){
                $('.gender'.i.' input[type="radio"]').click(function(){
                    document.getElementById('gender'.i).value = $("input:radio[name=demo".i."]:checked").val()
                    
                });
            });
            }
            </script> --}}
        
</head>
<body>
    <div id="main">
        <?php
        $i=0;
        ?>
        <form action="{{  route('store_booking')}}" method="POST">
            @csrf
            
            <input name="count_customer" value="{{ $request->count_customer }}" type="text" style="max-width: 0px;max-height:0px;display:none">
            <input name="adult" value="{{ $request->adult2 }}" type="text" style="max-width: 0px;max-height:0px;display:none">
            @foreach ($flights as $flight)
            <input name="plane_id" type="number" value="{{ $flight->plane_id }}" style="max-width: 0px;max-height:0px;display:none">
            <input name="chair" type="number" value="{{ $flight->chair }}" style="max-width: 0px;max-height:0px;display:none">
            <input name="departure" value="{{ $flight->dateDeparture }}" type="text" style="max-width: 0px;max-height:0px;display:none">
            <input name="hour" value="{{ $flight->hour }}" type="text" style="max-width: 0px;max-height:0px;display:none">
            <input name="minute" value="{{ $flight->minute }}" type="text" style="max-width: 0px;max-height:0px;display:none">
            @for ($i=1;$i<=$request->adult2;$i++)
            <input name="gender{{ $i }}" id="gender{{ $i }}" type="text" style="max-width: 0px;max-height:0px;display:none">
            @endfor
            <?php
            $total_money=round((float)$flight->price*(int)$request->adult2+(float)$flight->price*(int)$request->children2*1/3,0);
            ?>
            <input name="total_money" type="number" value="{{ $total_money }}" style="max-width: 0px;max-height:0px;display:none">
            
            @endforeach
            <div class="customer_mail">
                <div>Thong tin lien lac</div>
                <div>Email</div>
                <div><input name="mail" style="width:100%" type="text"></div>
                <div>Tên</div>
                <div><input name="name" style="width:100%" type="text"></div>
            </div>
        @for ($i=1;$i<=$request->adult2;$i++)
            <div class="customer">
                <div>Khách hàng {{ $i }}</div>
                <div class="gender{{ $i }}">
                    <input type="radio" onclick="Male({{ $i }})" name="Male{{ $i }}" value="Male"/> Male
                    <input type="radio" onclick="Female({{ $i }})" name="Female{{ $i }}" value="Female"/> Female
                </div>
                <div>Họ và tên</div>
                <div><input name="name{{ $i }}" style="width:100%" type="text"></div>
                <div>Số điện thoại</div>
                <div><input name="phone{{ $i }}" style="width:100%" type="text"></div>
                <div>Chứng minh nhân dân</div>
                <div><input name="cmnd{{ $i }}" style="width:100%" type="text"></div>
                <div>Tuổi</div>
                <div><input name="age{{ $i }}" style="width:100%" type="text"></div>
                <div>Quốc tịch</div>
                <div>
                    <select name="qt{{ $i }}"><option value="">-- select one --</option>
                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">Equatorial Guinean</option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">Papua New Guinean</option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">Solomon Islander</option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option></select>
                </div>
            </div>
        @endfor
        <div id="payment">
            <div id="header">
                <img src="http://localhost:8080/laivanvo/public/images/lock.png"/>Thanh toán an toàn
                <div style="font-weight: bold">Tất cả thông tin thẻ đều được mã hóa hoàn toàn, an toàn và được bảo vệ.</div>
                <div>Nhập chi tiết thẻ tín dụng/ghi nợ chúng tôi chấp nhận:</div>
                <img src="http://localhost:8080/laivanvo/public/images/visa.png"/>
            </div>
            <div id="main">
                <div>Số thẻ</div>
                <input type="text" name="card_number">
                <div>Tên trên thẻ</div>
                <input type="text" name="name_card">
                <div>Ngày hết hạn</div>
                <input type="text" name="expiration date">
                <div>CVC/CVV</div>
                <input type="text" name="CVC/CVV">
                <br>
                <button type="submit">Thanh toán</button>
            </div>
        </div>
        
        </form>
    </div>
    <div id="right">
        @foreach ($flights as $flight)
        <div style="width: 100%">
            
            {{-- <div style="background-image:url(http://localhost:8080/laivanvo/public/images/Boeing 707.jpg)"> --}}
            {{-- <div id="image" style="background-image:url('http://localhost:8080/laivanvo/public/images/boeing 707.jpg')"> --}}
            <img style="height: 320px; width: 100%; border: 1px solid black" src="http://localhost:8080/laivanvo/public/images/{{ $flight->image }}">
            <h3 style="width:100%"><span style="background-color:white;position: absolute;top: 280px;border: 3px solid green;">___{{ $flight->date }}/{{ $flight->month }} - {{ $request->adult2 }} hành khách - {{ $flight->name_category }}____ </span></h3>


            
        </div>
            <div class="detailDown" id="detailDown" onclick="detailDown1()">
                chi tiết
            </div>
            <div class="detail" id="detail">
                <div id="detail_title">flight</div>
            <div id="detail_left">
                <div class="detail_left_item">{{ $flight->dateDeparture_hour }}:{{ $flight->dateDeparture_minute }}</div>
                <div class="detail_left_item">{{ $flight->hour }}h{{ $flight->minute }}m</div>
                <div class="detail_left_item">{{ $flight->dateArrival_hour }}:{{ $flight->dateArrival_minute }}</div>
            </div>
            <div id="detail_img"><img style="height: 95%" src="http://localhost:8080/laivanvo/public/images/planes/flight.png"/></div>
                <div id="detail_content">
                    <div class="detail_content_item">{{ $flight->departure_airport }}</div>
                    <div class="detail_content_item">
                        {{-- <img src="http://localhost:8080/laivanvo/public/images/{{ $flight->image }}" style="max-width: 10%;max-height:100%"/> --}}
                        <div id="detail_content_item_div">{{ $flight->name_airline_company }}</div>
                    </div>
                    <div class="detail_content_item">{{ $flight->name_plane }}</div>
                    <div class="detail_content_item">{{ $flight->name_category }}</div>
                    <div class="detail_content_item">{{ $flight->arrival_airport }}</div>
                </div>
                <div class="detailUp" style="background-color: white" onclick="detailUp1()" id="detailUp"><img style="max-height:100%;background-color: white" src="images/up.png"/></div>
        
            
            
            
        </div>
        <div id="total_money">
            <div>
                Phân tích giá
            </div>
            <div style="width:40%;relative;float:left">trẻ em 1/3 giá</div>
            <div style="text-align:right;width:60%;position: relative;float:right">{{ $flight->price }}đ x {{ $request->adult2 }} + 1/3 x {{ $flight->price }}đ x {{ $request->children2 }}</div>
            <div style="width:40%;relative;float:left">Tổng cộng:</div>
            <?php
            $total=round((float)$flight->price*(int)$request->adult2+(float)$flight->price*(int)$request->children2*1/3,0);
            ?>
            <div style="text-align:right;width:60%;position: relative;float:right">{{ $total }} đ</div>
        </div>
        @endforeach
    </div>
    
        
    {{-- @endif --}}
</body>
</html>