<?php

use Illuminate\Database\Seeder;

class WordkersTableSeeder extends Seeder
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

        for ($i = 0; $i <=30; $i++){
            DB::table('workers')->insert([
                'first_letters' => $faker->firstName,
                'prefix' => $faker->suffix,
                'last_name' => $faker->lastName,
                'username' => $faker->userName,
                'password' => bcrypt('worker'),
            ]);
        }
    }
}