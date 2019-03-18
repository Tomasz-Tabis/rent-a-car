<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class IncoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::create(2019, 3, 18, 0, 0, 0);

        for ($i = 0; $i <=10; $i++){
            DB::table('invoices')->insert([
                'invoice_rule_id' => rand(1,30),
                'invoice_date' => $date->format('Y-m-d H:i:s'),
                'customer_id' => rand(1,30),
                'worker_id' => rand(1,30),
            ]);
        }
    }
}
