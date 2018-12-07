<?php

use Illuminate\Database\Seeder;

class ProductAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            \Illuminate\Support\Facades\DB::table('product_attribute')->insert([
                'product_id' => rand(1, 50),
                'attribute_value_id' => rand(1, 50),
            ]);
        }
    }
}
