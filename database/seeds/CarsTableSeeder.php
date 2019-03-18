<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        for ($i = 0; $i <=10; $i++){
            DB::table('cars')->insert([
                'licence_plate' => $faker->vehicleRegistration,
                'brand' => $faker->vehicle,
                'type' => $faker->vehicleType,
                'day_price' => rand(30, 50),
            ]);
        }
    }
}
