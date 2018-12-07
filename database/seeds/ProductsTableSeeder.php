<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            \Illuminate\Support\Facades\DB::table('products')->insert([
                'name' => str_random(10),
                'description' => str_random(60),
                'price' => rand(1000,99000),
            ]);
        }
    }
}
