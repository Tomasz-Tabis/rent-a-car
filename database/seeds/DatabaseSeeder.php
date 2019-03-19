php artisan make:seeder UsersTableSeeder<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CarsTableSeeder::class);
         $this->call(CustomersTableSeeder::class);
         $this->call(WordkersTableSeeder::class);
         $this->call(IncoicesTableSeeder::class);
        $this->call(IncoiceRulesTableSeeder::class);
    }
}
