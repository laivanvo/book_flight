<?php

namespace Tests\Feature\Http\Controller;

use Tests\TestCase;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\passenger;
use App\User;
use App\Models\Bill;
use Faker\Factory;

class PassengerControllerTest extends TestCase
{
    use DatabaseTransactions;

    public $passenger;
    public $passenger_token;

    protected function SetUp() : void
    {
        parent::setup();
        Session::start();
        $faker = Factory::create();
        User::create([
            'name' => $faker->name(),
            'email' => $faker->email(),
            'password' => $faker->name()
        ]);
        Bill::create([
            'user_id' => User::orderBy('id', 'desc')->first()->id,
            'total_money' => $faker->randomNumber(2)
        ]);
        $this->passenger = [
            'bill_id' => Bill::orderby('id', 'desc')->first()->id,
            'name_passenger' => $faker->email(),
            'CMND' => $faker->phoneNumber(),
            'phone' => $faker->phoneNumber(),
            'age' => $faker->randomNumber(2),
            'gender' => $faker->randomElement(['male', 'female']),
            'nationality' => $faker->address()
        ];
        $this->new = passenger::create($this->passenger);    
    }

    
    // public function testAuthRegisterFailInValidate($email, $password)
    // {
    //     Session::start();
    //     $response = $this->post('admin/register', [
    //         '_token' => csrf_token(),
    //         'name' => 'Minh',
    //         'password' => $password,
    //         'password_confirmation' => $password,
    //         'email' => $email,
    //         'address' => '80 Hao Nam',
    //         'phone' => '0989842021',
    //         'gender' => 1
    //     ]);
    //     $response->assertStatus(302);
    //     $response->assertRedirect('/');
    // }
    
    /**
     * @dataProvider provider
     */
    public function testUpdateInvalidError($bill_id, $name_passenger, $CMND, $phone, $age, $gender, $nationality)
    {
        // dd('dd');
        Session::start();
        $response = $this->call('PUT', '/passenger/' . passenger::orderby('id', 'desc')->first()->id, array(
            '_token' => csrf_token(),
            'bill_id' => $bill_id,
            'name_passenger' => $name_passenger,
            'CMND' => $CMND,
            'phone' => $phone,
            'age' => $age,
            'gender' => $gender,
            'nationality' => $nationality
        ));
        // dd($response);
        // $response->assertSessionHasErrors(['name_passenger']);
        $response->assertStatus(302);
        $response->assertRedirect('/');
    }

    public static function provider()
    {
        $faker = Factory::create();
        $passenger = [
            'bill_id' => 4,
            'name_passenger' => $faker->email(),
            'CMND' => $faker->phoneNumber(),
            'phone' => $faker->phoneNumber(),
            'age' => $faker->randomNumber(2),
            'gender' => $faker->randomElement(['male', 'female']),
            'nationality' => $faker->address()
        ];
        $passengerz = array($passenger, $passenger, $passenger, $passenger, $passenger, $passenger);
        // dd($passengerz);
        
        $passengerz[0]['name_passenger'] = '';
        $passengerz[1]['CMND'] = '';
        $passengerz[2]['phone'] = '';
        $passengerz[3]['age'] = null;
        $passengerz[4]['gender'] = '';
        $passengerz[5]['nationality'] = '';
        $result= array();
        $a = array();
        for ($i = 0; $i <= 5; $i++)
        {
            $a = array();
            foreach($passengerz[$i] as $x=>$x_value)
            {
                array_push($a, $x_value);
            }
            array_push($result, $a);
        }
        return $result;
        
    }

    public function testUpdateNoChange()
    {
        $this->passenger['_token'] = csrf_token();
        $response = $this->call('PUT', '/passenger/' . passenger::orderby('id', 'desc')->first()->id,$this->passenger);
        $response->assertRedirect('/');
    }

    public function testUpdateToChange()
    {
        $this->passenger['_token'] = csrf_token();
        $faker = Factory::create();
        $this->passenger['age'] = $faker->randomNumber(2);
        $response = $this->call('PUT', '/passenger/' . passenger::orderby('id', 'desc')->first()->id, $this->passenger);
        $response->assertRedirect('/passenger');
        unset($this->passenger['_token']);
        $this->assertDatabaseHas('passengers', $this->passenger);
    }















    

    // public function testStoreInvalidError()
    // {
        
    //     $response = $this->call('POST', '/passenger', array(
    //         '_token' => csrf_token(),
    //         'bill_id' => 4,
    //         'name_passenger' => 'name',
    //         'CMND' => 'CMND',
    //         'phone' => 'phone',
    //         'age' => 22,
    //         'gender' => 'gender',
    //         'nationality' => 'nationality'
    //     ));
    //     // dd($response);
    //     $response->assertSessionHasErrors(['name_passenger']);
    // }

    public function testIndex()
    {
        $response = $this->call('GET', '/passenger');
        $this->assertEquals(200, $response->getStatusCode());
        // dd($response);
    }

    public function testCreate()
    {
        $response = $this->call('GET', '/passenger/create');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testShow()
    {
        $passenger = passenger::first();
        $response = $this->call('GET', '/passenger/' . $passenger->id);
        $this->assertEquals(200, $response->getStatusCode());
    }


    public function testStoreOk()   
    {
        $this->passenger['_token'] = csrf_token();
        $response = $this->call('POST', '/passenger', $this->passenger);
        $this->assertEquals(302, $response->getStatusCode());
        $this->passenger['id'] = passenger::orderby('id', 'desc')->first()->id;
        unset($this->passenger['_token']);
        $this->assertDatabaseHas('passengers', $this->passenger);
        $response->assertRedirect('/passenger/create');
    }

    public function testDestroyOk()
    {
        $response = $this->call('DELETE', '/passenger/' . passenger::orderby('id', 'desc')->first()->id, array(
            '_token' => csrf_token()
        ));
        $this->assertEquals(302, $response->getStatusCode());
        $response->assertRedirect('/passenger');
    }

}
