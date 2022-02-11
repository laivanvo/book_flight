<?php
namespace Tests\Feature\Http\Controller;
use Tests\TestCase;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class BookingControllerTest extends TestCase
{
    public function testBook()
    {
        $response = $this->call('GET', '/home');
        // dd($response);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testBookForm()
    {
        Session::start();
        $response = $this->call('POST', '/book', array(
            '_token' => csrf_token(),
            'departure_airport' => 'Sân bay Quốc tế Nội Bài',
            'arrival_airport' => 'Sân bay Quốc tế Tân Sơn Nhất',
            'dateDeparture' => '2021-10-17',
            'name_category' => 'Economy class',
            'adult' => '1',
            'children' => '1',
        ));
        // dd($response);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testFill()
    {
        Session::start();
        $response = $this->call('POST', '/fill', array(
            "_token" => csrf_token(),
            "children2" => "1",
            "adult2" => "1",
            "count_customer" => "2",
            "flight_code" => "1",
            "plane_code" => "5",
        ));
        // dd($response);
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        // Auth::user()->id = 2;
        Session::start();
        $response = $this->call('POST', '/store_booking', array(
            "_token" => csrf_token(),
            "count_customer" => "2",
            "adult" => "1",
            "plane_id" => "5",
            "chair" => "3",
            "departure" => "2021-10-17 00:00:00",
            "hour" => "2",
            "minute" => "30",
            "gender1" => "Male",
            "total_money" => "4733333",
            "mail" => "laivanvo2000s@gmail.com",
            "name" => "vo lai van",
            "Male1" => "Male",
            "name1" => "lai van vo",
            "phone1" => "0346582908",
            "cmnd1" => "0352004296",
            "age1" => "22",
            "qt1" => "albanian",
            "card_number" => null,
            "name_card" => null,
            "expiration_date" => null,
            "CVC/CVV" => null,
        ));
        // dd($response);
        $this->assertEquals(200, $response->getStatusCode());
    }
}

?>