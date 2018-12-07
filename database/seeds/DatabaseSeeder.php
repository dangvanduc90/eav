<?php

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
         $this->call([
             ProductsTableSeeder::class,
             AttributesTableSeeder::class,
             AttributeValueTableSeeder::class,
             ProductAttributeTableSeeder::class,
         ]);
    }
}
