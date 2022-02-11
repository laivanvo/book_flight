<?php

use App\Models\passenger;
use Illuminate\Database\Seeder;
use App\Models\Bill;
use App\User;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        $user = User::create([
            'name' => $faker->name(),
            'email' => $faker->email(),
            'password' => $faker->password()
        ]);
        $bill = bill::create([
            'user_id' => $user->id,
            'total_money' => $faker->randomNumber(2)
        ]);
        $passenger = passenger::create([
            'bill_id' => $bill->id,
            'name_passenger' => $faker->name(),
            'CMND' => $faker->phoneNumber(),
            'phone' => $faker->phoneNumber(),
            'age' => $faker->randomNumber(2),
            'gender' => $faker->randomElement(['male', 'female']),
            'nationality' => $faker->address()
        ]);
    }
}
