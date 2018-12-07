<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            \Illuminate\Support\Facades\DB::table('attributes')->insert([
                'name' => str_random(10),
            ]);
        }
    }
}
