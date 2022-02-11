<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CheckBookFormRequest;
use App\Models\passenger;
use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FillRequest;
use App\Models\Plane;
use Brick\Math\BigInteger;
use Brick\Math\BigNumber;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;

class BookingController extends Controller
{
    public function book()
    {
        $route_departure_airports = DB::table('routes')
            ->distinct()
            ->select(DB::raw('departure_airport'))
            ->get();
        $route_arrival_airports = DB::table('routes')
            ->distinct()
            ->select(DB::raw('arrival_airport'))
            ->get();
        return view('client.booking.index')->with('route_departure_airports', $route_departure_airports)->with('route_arrival_airports', $route_arrival_airports);
    }

    public function bookForm(CheckBookFormRequest $request)
    {
        // dd($request);
        $route_departure_airports = DB::select('select distinct departure_airport from routes');
        $route_arrival_airports = DB::select('select distinct arrival_airport from routes');
        // $list_flights = DB::table('flights')
            // ->join('routes', 'routes.id', ' = ', 'flights.route_id')
            // ->join('planes', 'flights.id', ' = ', 'planes.flight_id')
            // ->join('categories', 'categories.id', ' = ', 'planes.category_id')
            // ->join('airline_companies', 'airline_companies.id', ' = ', 'planes.airline_company_id')
            // ->select(DB::raw('*, hour(dateDeparture) dateDeparture_hour, minute(dateDeparture) dateDeparture_minute, hour(dateArrival) dateArrival_hour, minute(dateArrival) dateArrival_minute, timestampdiff(day, dateDeparture, dateArrival) day, mod(timestampdiff(hour, dateDeparture, dateArrival), 24) hour, mod(timestampdiff(minute, dateDeparture, dateArrival), 60) minute'))
            // ->where('departure_airport',  ' = ',  $request->departure_airport)
            // ->where('arrival_airport', ' = ', $request->arrival_airport)
            // ->where('dateDeparture',  'LIKE',  "%{$request->dateDeparture}%")
            // ->where('name_airline_company',  '! = ', $request->name_airline_company)
            // ->orderBy($request->sort, 'asc')
            // ->get();
        $sql = "select distinct *, planes.id plane_code, flights.id flight_code, hour(dateDeparture) dateDeparture_hour, minute(dateDeparture) dateDeparture_minute, hour(dateArrival) dateArrival_hour, minute(dateArrival) dateArrival_minute, timestampdiff(day, dateDeparture, dateArrival) day, mod(timestampdiff(hour, dateDeparture, dateArrival), 24) hour, mod(timestampdiff(minute, dateDeparture, dateArrival), 60) minute from flights, routes, planes, categories, airline_companies
        where routes.id = flights.route_id and flights.id = planes.flight_id and categories.id = planes.category_id and airline_companies.id = planes.airline_company_id and status = '1' 
        and departure_airport  = '".$request->departure_airport."' and (name_airline_company like '%".$request->name_airline_company."' and arrival_airport = '".$request->arrival_airport."') and dateDeparture = '".$request->dateDeparture."'".$request->sort;
        $select = "select *, hour(dateDeparture) dateDeparture_hour, minute(dateDeparture) dateDeparture_minute, hour(dateArrival) dateArrival_hour, minute(dateArrival) dateArrival_minute, timestampdiff(day, dateDeparture, dateArrival) day, mod(timestampdiff(hour, dateDeparture, dateArrival), 24) hour, mod(timestampdiff(minute, dateDeparture, dateArrival), 60) minute from flights, routes, planes, categories, airline_companies
        where routes.id = flights.route_id and flights.id = planes.flight_id and categories.id = planes.category_id and airline_companies.id = planes.airline_company_id
        and departure_airport  = '".$request->departure_airport."' and arrival_airport = '".$request->arrival_airport."' and dateDeparture = '".$request->dateDeparture."'";
        $select1 = "select distinct name_airline_company from flights, routes, planes, categories, airline_companies
        where routes.id = flights.route_id and flights.id = planes.flight_id and categories.id = planes.category_id and airline_companies.id = planes.airline_company_id
        and departure_airport  = '".$request->departure_airport."' and arrival_airport = '".$request->arrival_airport."' and dateDeparture = '".$request->dateDeparture."'";
        $price_sql = $select." order by price asc limit 1";
        $speed_sql = $select." order by dateDeparture_minute asc limit 1";
        $speed_price_sql = $select." order by price asc, dateDeparture_minute asc limit 1";
        $list_flights = DB::select($sql);
        $list_flights_count = count($list_flights);
        $price_min = DB::select($price_sql);
        $speed_min = DB::select($speed_sql);
        $speed_price_min = DB::select($speed_price_sql);
        $list_name_airline_companies = DB::select($select1);
        $list_dateDepartures = DB::select('select date_add("'.$request->dateDeparture.'", INTERVAL -2 day) pre2, date_add("'.$request->dateDeparture.'", INTERVAL -1 day) pre1, "'.$request->dateDeparture.'" median, date_add("'.$request->dateDeparture.'", INTERVAL 1 day) next1, date_add("'.$request->dateDeparture.'", INTERVAL 2 day) next2');
        return view('welcome')->with('request', $request)->with('price_min', $price_min)->with('speed_min', $speed_min)->with('speed_price_min', $speed_price_min)->with('list_flights', $list_flights)->with('list_flights_count', $list_flights_count)
            ->with('route_departure_airports', $route_departure_airports)->with('route_arrival_airports', $route_arrival_airports)->with('list_dateDepartures', $list_dateDepartures)->with('list_name_airline_companies', $list_name_airline_companies);
    }

    public function fill(Request $request)
    {
        // dd($request);
        $select = "select *, planes.id plane_id, EXTRACT(MONTH FROM dateDeparture) month, EXTRACT(day FROM dateDeparture) date, hour(dateDeparture) dateDeparture_hour, minute(dateDeparture) dateDeparture_minute, hour(dateArrival) dateArrival_hour, minute(dateArrival) dateArrival_minute, timestampdiff(day, dateDeparture, dateArrival) day, mod(timestampdiff(hour, dateDeparture, dateArrival), 24) hour, mod(timestampdiff(minute, dateDeparture, dateArrival), 60) minute from planes, flights, routes, categories, airline_companies
            where planes.flight_id = flights.id and flights.route_id = routes.id and categories.id = planes.category_id and airline_companies.id = planes.airline_company_id and planes.id = ".$request->plane_code." and flights.id = ".$request->flight_code;
        $flights = DB::select($select);
        return view('fill_information')->with('request', $request)->with('flights', $flights);
    }

    public function storeBooking(Request $request)
    {
        // dd($request);
        $bill = bill::create([
            'user_id' => 2,
            'total_money' => $request->total_money
        ]);

        // Tạo bill detail
        
        BillDetail::create([
            'bill_id' => $bill->id,
            'chair' => $request->chair . "-" . ($request->chair + $request->count_customer),
            'departure' => $request->departure
        ]);
        $chair = $request->chair + $request->count_customer + 1;
        $plane = plane::find($request->plane_id);
        $plane->chair = $chair;
        if ($plane->chair>$plane->chair_full) {
            $plane->status = '0';
        }
        $plane->save();
        for ($i = 1; $i <= $request->adult; $i++) {
            $name = "name" . $i;
            $phone = "phone" . $i;
            $CMND = "cmnd" . $i;
            $age = "age" . $i;
            $gender = "gender" . $i;
            $qt = "qt" . $i;
            $passengers  = new passenger();
            $passengers->bill_id = $bill->id;
            $passengers->name_passenger = $request->$name;
            $passengers->phone = $request->$phone;
            $passengers->CMND = $request->$CMND;
            $passengers->age = $request->$age;
            $passengers->gender = $request->$gender;
            $passengers->nationality = $request->$qt;
            $passengers->save();
        }
        $data = [
            'name' => $request->name,
            'dateDepature' => $request->depature,
            'hour' => $request->hour,
            'minute' => $request->minute
        ];
        // $this->sendMail($request->mail, $data);
        return view('thank')->with('success', 'Quý khách đã đặt phòng thành công. Thông tin chi tiết đã được gửi tới email của bạn');
    }

    // public function sendMail($email, $data = [])
    // {
    //     Mail::to($email)->send(new BookingMail($data));
    // }
}
