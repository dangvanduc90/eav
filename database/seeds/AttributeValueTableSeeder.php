<?php

use Illuminate\Database\Seeder;

class AttributeValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            \Illuminate\Support\Facades\DB::table('attribute_value')->insert([
                'attribute_id' => rand(1, 50),
                'name' => str_random(10)
            ]);
        }
    }
}
