<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class IncoiceRulesTableSeeder extends Seeder
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
        $faker->addProvider(new Faker\Provider\nl_NL\Person($faker));
        $faker->addProvider(new Faker\Provider\nl_NL\Address($faker));
        $faker->addProvider(new Faker\Provider\nl_NL\PhoneNumber($faker));
        $faker->addProvider(new Faker\Provider\nl_NL\Company($faker));

        $date = Carbon::create(2015, 5, 28, 0, 0, 0);

        for ($i = 0; $i <=30; $i++){
            DB::table('invoice_rules')->insert([
                'invoice_id' => rand(1,10),
                'car_id' => rand(1,10),
                'begin_date' => $date->format('Y-m-d'),
                'end_date' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
            ]);
        }
    }
}