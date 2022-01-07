<?php

use App\Models\hocsinh;
use Illuminate\Database\Seeder;

class HocsinhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        for($i=1;$i<=200;$i++)
        {
            $hocsinh=new hocsinh();
            $hocsinh->name=$faker->name();
            $hocsinh->phone=$faker->phoneNumber();
            $hocsinh->id_card=$faker->creditCardNumber();
            $hocsinh->save();
        }
    }
}
